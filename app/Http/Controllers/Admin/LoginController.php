<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminLoginRequest;
use App\Models\Admin;
use App\services\AuthenticationServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

      // Service Container
    private AuthenticationServices $authService;
    public function __construct(AuthenticationServices $authService) {
        $this->authService = $authService;
    }

      //Login View
      public function login_view(){
        return view('admin.login');
    }
    
    //Authentication
    public function login(AdminLoginRequest $request){
       
       //Login
      $this->authService->login($request,'admin','admin.dashboard');

      return redirect()->back()->with('failed','Email or Password Not Valid');
    }
}
