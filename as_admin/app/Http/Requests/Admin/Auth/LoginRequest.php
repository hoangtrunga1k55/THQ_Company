<?php

namespace App\Http\Requests\Admin\Auth;

use App\Models\Admin;
use App\Rules\EmailRule;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => [
                'required',
                'max:'.config('validation.maxlength_input'),
                'email',
                new EmailRule(),
            ],
            'password' => 'required|string|max:255',
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @return void
     *
     * @throws ValidationException
     */
    public function authenticate()
    {
        $this->ensureIsNotRateLimited();

        $credentials = $this->only('email', 'password');
        $credentials['status'] = Admin::STATUS_ACTIVE;

        if (!Auth::guard('admin')->attempt($credentials, $this->filled('remember'))) {
            RateLimiter::hit($this->throttleKey(), 1800);

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Check email exist
     *
     * @param App\Http\Requests\LoginRequest $request
     *
     * @return bool
     */
    public function isExistEmail()
    {
        $email = $this->get('email');

        return $email && Admin::where('email', $email)->first();
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @return void
     *
     * @throws ValidationException
     */
    public function ensureIsNotRateLimited()
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 3) || !$this->isExistEmail()) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     *
     * @return string
     */
    public function throttleKey()
    {
        $admin = Admin::whereRaw('lower(email) = ?', Str::lower($this->input('email')))->first();

        if ($admin) {
            return $admin->id.'|'.$this->ip();
        }

        return Str::lower($this->input('email')).'|'.$this->ip();
    }
}
