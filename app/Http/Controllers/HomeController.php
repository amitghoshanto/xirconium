<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $meta = [
            'title' => '',
        ];
        return view('home', compact('meta'));
    }
}
