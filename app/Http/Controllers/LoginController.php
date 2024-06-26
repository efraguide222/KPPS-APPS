<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login() {
        if (Auth::check()) {
            return redirect('home');
        } else {
            return view ('login');
        }
    }

    public function actionLogin(Request $request) {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (AUTH::attempt($data)) {
            return redirect('home');
        }else {
            Session::flash('error', 'Incorrect email or password');
            return redirect('/');
        }
    }

    public function actionLogout() {
        Auth::logout();
        return redirect('/');
    }
}
