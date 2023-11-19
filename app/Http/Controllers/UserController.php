<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function edit(Request $request)
    {
        $rules = [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'gender' => ['required', 'numeric'],
            'dob_d' => ['required', 'numeric'],
            'dob_m' => ['required', 'numeric'],
            'dob_y' => ['required', 'numeric'],
            'email' => ['required', 'email'],

        ];
        $custommessage = [
            'first_name' => 'Insert First Name',
            'last_name' => 'Insert Last Name',
            'gender' => 'Select Gender',
            'dob_d' => 'Select Day',
            'dob_m' => 'Select Month',
            'dob_y' => 'Select Year',
            'email' => 'Insert Email Address',

        ];
        $this->validate($request, $rules, $custommessage);

        User::where('id', Auth::user()->id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'dob_d' => $request->dob_d,
            'dob_m' => $request->dob_m,
            'dob_y' => $request->dob_y,
            'email' => $request->email,
        ]);
        return back()->with(['alert' => 'success', 'title' => 'Profile Updated', 'muted' => 'Profile Updated.']);
    }
}
