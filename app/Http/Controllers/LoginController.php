<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function login(Request $request) 
    {
        $email = $request->email;
        $pwd = $request->password;
        $user = User::where('email', '=', $email)->where('password', $pwd)->first();
        if ($user->role == 1) {
            // chuyen ve trang admin
        } else {
            return redirect('/');
        }
    }
}
