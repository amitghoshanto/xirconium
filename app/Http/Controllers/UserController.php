<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $meta = [
            'title' => 'Profile',
        ];
        return view('profile.index', compact('meta'));
    }
}
