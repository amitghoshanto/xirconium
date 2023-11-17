<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\VerificationCode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
        $validatedData = $request->validate([
            'contact' => 'required',
            'password' => 'required|min:2|max:25',
        ]);
        $only_number = Str::replace('+880', '', $validatedData['contact']);
        if (Auth::attempt([
            'contact' => $only_number,
            'password' => $validatedData['password'],
        ])) {
            $request->session()->regenerate();
            return redirect()->back();
        }
        return back()->with(['alert' => 'danger', 'title' => 'Wrong credentials', 'muted' => 'The provided credentials do not match our records.']);
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

        $validatedData = $request->validate([
            'contact' => 'required',
        ]);
        $only_number = Str::replace('+880', '', $validatedData['contact']);
        $user = User::where('contact', $only_number)->first();
        if ($user) {
            return back()->with(['alert' => 'danger', 'title' => 'Already register', 'muted' => 'Already register.']);
        } else {
            VerificationCode::create([
                'contact' => $only_number,
                // 'code' => rand(100000, 999999),  
                'code' => 999999,
            ]);
            Session::put('contact', $validatedData['contact']);
            return redirect(route('verify-signup'))->with(['alert' => 'success', 'title' => 'Verification code sent', 'muted' => 'Verification code sent.']);
        }
    }

    public function verifySignup()
    {
        $meta = [
            'title' => 'Verify Signup',
        ];
        return view('auth.verify-signup', compact('meta'));
    }

    public function codeVerification(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required',
        ]);
        $code = $validatedData['code'][0] . $validatedData['code'][1] . $validatedData['code'][2] . $validatedData['code'][3] . $validatedData['code'][4] . $validatedData['code'][5];
        $contact = Session::get('contact');
        $only_number = Str::replace('+880', '', $contact);
        $verify = VerificationCode::where('contact', $only_number)->where('code', $code)->orderBy('id', 'desc')->first();
        if ($verify) {
            return redirect(route('set-password'))->with(['alert' => 'success', 'title' => 'Verification successful', 'muted' => 'Set your password.']);
        } else {
            return back()->with(['alert' => 'danger', 'title' => 'Wrong code', 'muted' => 'Try again.']);
        }
    }
    public function setPassword()
    {
        $meta = [
            'title' => 'Set Password',
        ];
        return view('auth.set-password', compact('meta'));
    }

    public function setPasswordPost(Request $request)
    {
        $validatedData = $request->validate([
            'password' => 'required|min:2|max:25|confirmed',
            'password_confirmation' => 'required|min:2|max:25',
        ]);
        $only_number = Str::replace('+880', '', Session::get('contact'));
        //create an account for user
        $user = User::where('contact', $only_number)->first();
        $clean_pass = $validatedData['password'];
        $newpass = Hash::make($validatedData['password']);

        User::create([
            'contact' => $only_number,
            'password' => $newpass,
        ]);


        if (Auth::attempt([
            'contact' => $only_number,
            'password' => $clean_pass,
        ])) {
            $request->session()->regenerate();
            return redirect()->back();
        }

        return redirect(route('login'))->with(['alert' => 'success', 'title' => 'Password set', 'muted' => 'Password set.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
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


        $validatedData = $request->validate([
            'contact' => 'required',
        ]);
        $only_number = Str::replace('+880', '', $validatedData['contact']);
        $user = User::where('contact', $only_number)->first();
        if (!$user) {

            return back()->with(['alert' => 'danger', 'title' => 'There is no account associated with this Mobile Number.
            Create an account with it.', 'muted' => 'Not registered.']);
        } else {
            // update user > reset_code 
            $reset_code = rand(100000, 999999);
            User::where('contact', $only_number)->update([
                'reset_code' => $reset_code,
            ]);


            Session::put('contact', $validatedData['contact']);
            return redirect(route('verify-ownership'))->with(['alert' => 'success', 'title' => 'Verification code sent', 'muted' => 'Verification code sent.']);
        }
    }

    public function verifyOwnership()
    {
        $meta = [
            'title' => 'Verify Ownership',
        ];
        return view('auth.verify-ownership', compact('meta'));
    }

    public function verifyOwnershipPost(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required',
        ]);
        $code = $validatedData['code'][0] . $validatedData['code'][1] . $validatedData['code'][2] . $validatedData['code'][3] . $validatedData['code'][4] . $validatedData['code'][5];
        $contact = Session::get('contact');
        $only_number = Str::replace('+880', '', $contact);
        $verify = User::where('contact', $only_number)->where('reset_code', $code)->first();
        if ($verify) {
            return redirect(route('change-password'))->with(['alert' => 'success', 'title' => 'Verification successful', 'muted' => 'Set your password.']);
        } else {
            return back()->with(['alert' => 'danger', 'title' => 'Your verification code was incorrect. Please enter the correct code.', 'muted' => 'Try again.']);
        }
    }

    public function changePassword()
    {
        $meta = [
            'title' => 'Set Password',
        ];
        return view('auth.change-password', compact('meta'));
    }

    public function changePasswordPost(Request $request)
    {
        $validatedData = $request->validate([
            'password' => 'required|min:2|max:25|confirmed',
            'password_confirmation' => 'required|min:2|max:25',
        ]);
        $only_number = Str::replace('+880', '', Session::get('contact'));
        //create an account for user
        $clean_pass = $validatedData['password'];
        $newpass = Hash::make($validatedData['password']);

        User::where('contact', $only_number)->update([
            'password' => $newpass,
        ]);

        if (Auth::attempt([
            'contact' => $only_number,
            'password' => $clean_pass,
        ])) {
            $request->session()->regenerate();

            return redirect(route('profile'))->with(['alert' => 'success', 'title' => 'Password changed', 'muted' => 'Password changed.']);
        } else {

            return back()->with(['alert' => 'danger', 'title' => 'Password not changed', 'muted' => 'Password not changed.']);
        }
    }
}
