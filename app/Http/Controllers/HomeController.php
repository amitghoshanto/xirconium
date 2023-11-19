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

    public function aboutUs()
    {
        $meta = [
            'title' => 'About Us',
        ];
        return view('static.about-us', compact('meta'));
    }

    public function privacyPolicy()
    {
        $meta = [
            'title' => 'Privacy Policy',
        ];
        return view('static.privacy-policy', compact('meta'));
    }

    public function termsAndConditions()
    {
        $meta = [
            'title' => 'Terms and Conditions',
        ];
        return view('static.terms-and-conditions', compact('meta'));
    }
}
