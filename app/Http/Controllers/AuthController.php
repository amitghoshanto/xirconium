<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        $meta = [
            'title' => 'Login',
        ];
        return view('auth.login', compact('meta'));
    }
    public function login(Request $request)
    {
        dump($request->all());
    }

    public function signup()
    {
        $meta = [
            'title' => 'Signup',
        ];
        return view('auth.signup', compact('meta'));
    }


    public function create(Request $request)
    {
        dump($request->all());
    }
    public function logout()
    {
    }

    public function forgotPassword()
    {
        $meta = [
            'title' => 'Forgot Password',
        ];
        return view('auth.forgot-password', compact('meta'));
    }

    public function forgotPasswordPost(Request $request)
    {
        dump($request->all());
    }
}
