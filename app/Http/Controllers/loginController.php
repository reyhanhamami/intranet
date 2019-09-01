<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function getLogin(){
        return view("administrator.login");
    }
}
