<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use PEAR2\Net\RouterOS;

class loginController extends Controller
{

    // show tampilan login 
     public function getLogin(){
        return view("administrator.login");
    }
    // protected function attemptLogin(Request $request){
    //     $user = User::where([
    //         'email' => $request->email,
    //         'password' => md5($request->password)
    //     ])->first();
    //     $hasil = Auth::attempt($user);
    //         // dd($user);
    //     if($hasil){
    //         return redirect()->route('save');
    //     //    dd(Auth::login($user));
    //     } else {
    //         return redirect()->back();
    //     }
    // }

   
    //proses login
    public function login(Request $request){
       
        // $u = User::where('email', '=', $request->email)->first();
        $remember = $request->remember;
        $credentials = [
            'email' => $request->email,
            'pswd' => md5($request->pswd)
        ];
        if (Auth::Attempt($credentials, $remember)){
            return redirect()->intended(route('dashboard'));
        }
        
     
        return redirect()->back()->with('gagal', 'Password atau Email anda salah!!')->withInput($request->only('email', 'pswd'));
    }

    // protected function credentials(Request $request)
    // {
    //     return [
    //         $this->email() => $request->get('email'),
    //         'password' => md5($request->get('password'))
    //     ];
    // }
    //  public function validateCredentials(UserContract $user, array $credentials)
    // {
    //     $plain = $credentials['password'];
    //     return $this->hasher->check($plain, $user->getAuthPassword());
    // }


    //     public function postLogin(Request $request){
//         $user = User::where('email', $request->email)
//                     ->where('password', md5($request->password))
//                     ->first();
//         if ($user) {
// dd(Auth::login($user));            // return redirect()->route('save');
//         } 
        
//         // menggunakan bycript
//         // $data = User::where([
//         //     'email' => $request->email,
//         //     'password' => md5($request->password)    
//         // ])->first();
//         // if($data) {
//         //     dd(Auth::attempt($data));
//         // //    return redirect()->route('save');
//         // } else {
//         //     return redirect()->back();
//         // }
//     }
    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }

    
}
