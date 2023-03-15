<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Admin;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    /**
     * Display the login view.
     *
     * @return View
     */
    public function showLogin()
    {
        session()->pull('url.intended');

        return view('admin.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param LoginRequest $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function login(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        if (auth('admin')->user()->isSuperAdminRole()) {
            return redirect()->route('admin.Spage');
        }

        return redirect()->route('admin.page');
    }

    public function superAdminPage()
    {
        return 'super-admin';
    }

    public function adminPage()
    {
        return 'admin';
    }

    public function showRegisterForm()
    {
        return view('admin.auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $admin = new Admin();
        $admin->name = $request->name ?? '';
        $admin->email = $request->email ?? '';
        $admin->password = $request->password ?? '';
        $admin->status = Admin::STATUS_ACTIVE;
        $admin->admin_role_id = Admin::ADMIN_ROLE_ID ?? '';
        $admin->save();

        return redirect(route('admin.admin_page'))->with('message', 'Register successfully');
    }
}
