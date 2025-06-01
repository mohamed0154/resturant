<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    
    
    public function logout(Request $request)

{

    if(Auth::guard('admin')->check()){
        Auth::guard('admin')->logout();
           $request->session()->invalidate();

         $request->session()->regenerateToken();

 
         return to_route('admin.login');
    }
    Auth::logout();
    
    $request->session()->invalidate();

    $request->session()->regenerateToken();

 
    return to_route('login');

}
}
