<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\services\AuthenticationServices;

class AuthUserController extends Controller
{
    // Service Container
    public function __construct(
        private AuthenticationServices $authService
    ) {}

    // Create User
    public function register_view()
    {
        return view('auth.register');
    }

    // Store User
    public function register(RegisterRequest $request)
    {
        $this->authService->register($request);
        return to_route('register_view')->with('success', 'You can Login Now');
    }

    // Login View
    public function login_view()
    {
        return view('auth.login');
    }

    // login
    public function login(LoginRequest $request)
    {
        // Login
        $this->authService->login($request, 'web', 'users.home');
        return redirect()->back()->with('failed', 'Email or Password Not Valid');
    }
}
