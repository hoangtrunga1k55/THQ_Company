<?php

namespace App\Http\Controllers\RM\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;

    /**
     * The maximum number of attempts to allow.
     */
    protected $maxAttempts = 3;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * The number of minutes to throttle for.
     */
    protected $decayMinutes = 30;

    /**
     * Show login page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showLoginForm()
    {
        session()->pull('url.intended');

        return view('rm.auth.login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param App\Http\Requests\LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(LoginRequest $request)
    {
        if (
                method_exists($this, 'hasTooManyLoginAttempts') &&
                $this->hasTooManyLoginAttempts($request) &&
                $this->isExistEmail($request)
        ) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    /**
     * Check email exist
     *
     * @param App\Http\Requests\LoginRequest $request
     *
     * @return bool
     */
    public function isExistEmail(LoginRequest $request)
    {
        $email = $request->get('email');

        return $email && User::where('email', $email)->first();
    }
}
