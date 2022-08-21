<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    
    public function loginForm(){
        return view('admin_auth.login',);
    }
    
    public function login(Request $request){

        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
            $data['title'] = 'Dashboard';
            return redirect()->route('dashboard',$data);
            
        }
        else{
            return redirect()->back()->with('error-msg', 'Invalid Email Or Password');
        }
    }
}
