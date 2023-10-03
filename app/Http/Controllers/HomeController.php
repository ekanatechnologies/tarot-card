<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    function index():View
    {
        return view('general.index');
    }
    function aboutUs():View
    {
        return view('general.pages.about-us');
    }
    function testimonials():View
    {
        return view('general.pages.testimonials');
    }
    function contactUsPage():View
    {
        return view('general.pages.contact-us');
    }
    function predictionServices():View
    {
        return view('general.pages.prediction-service');
    }
    function signup(Request $request)
    {
        $credentials = $request->validate([
            'signup_name' => ['required'],
            'signup_email' => ['required', 'email','unique:users,email'],
            'signup_phone' => ['required', 'integer','digits:10'],
            'signup_password' => ['required','confirmed'],
        ]);
        $user= new User();
        $user->name=$request->signup_name;
        $user->phone=$request->signup_phone;
        $user->email=$request->signup_email;
        $user->password=Hash::make($request->signup_password);

        if (!$user->save()){
            return redirect()->back()->with('error','Unable to create user at the moment');
        }
        switch ($request->signup_user_type){
            case 'consultant':
                $user->assignRole('consultant');
                break;
            case 'user':
                $user->assignRole('user');
                break;
        }
        auth()->login($user);
        if (auth()->user()->hasRole('admin')){
            return redirect()->route('admin.dashboard');
        }
        if (auth()->user()->hasRole('user')){
            return redirect()->route('home');
        }
        if (auth()->user()->hasRole('consultant')){
            return redirect()->route('consultant.dashboard');
        }
    }
    function login(Request $request)
    {
        $credentials = $request->validate([
            'login_email' => ['required', 'email'],
            'login_password' => ['required'],
        ]);

        if (Auth::attempt(['email'=>$request->login_email,'password'=>$request->login_password])) {
            $request->session()->regenerate();
            if (auth()->user()->hasRole('admin')){
                return redirect()->route('admin.dashboard');
            }
            if (auth()->user()->hasRole('user')){
                return redirect()->route('home')->with('success', 'Signed in successfully');
            }
            if (auth()->user()->hasRole('consultant')){
                return redirect()->route('consultant.dashboard');
            }
        }

        return back()->withErrors([
            'login_email' => 'The provided credentials do not match our records.',
        ])->onlyInput('login_email');
    }
    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
