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
        if ($user != null) {
            // save user to session
            $request->session()->put('user', $user);
            if ($user->role == 1) {
                return redirect()->route('admin.home');
            } else {
                return redirect('/');
            }
        }
        return redirect()->route('login');
    }

    public function logout(Request $request) 
    {
        // xóa session
        $request->session()->flush();
        return redirect()->route('login');
    }
}
