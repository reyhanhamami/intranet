<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class loginController extends Controller
{
    public function getLogin(){
        return view("administrator.login");
    }
    public function postLogin(Request $request){
        $data = [
            'email' => $request->email,
            'password' => $request->password    
        ];
        if(Auth::attempt($data)) {
           return redirect()->route('dashboard');
        } else {
            return redirect()->back();
        }
    }
    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }
}
