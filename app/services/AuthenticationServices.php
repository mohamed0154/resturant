<?php

namespace App\services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticationServices{


    public function register($request){

        $data = $request->except('_token','password','password_confirmation');
        $data['password'] = Hash::make($request->password);
        User::create($data);

        return;
    }

    public function login($request,$guard,$routeTo){

        if (Auth::guard($guard)->attempt($request->validated())) {
            $request->session()->regenerate();
            return to_route($routeTo);

        }
        return;
    }
}