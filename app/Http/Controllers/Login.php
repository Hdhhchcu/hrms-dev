<?php

namespace App\Http\Controllers;



// use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


class Login extends Controller
{

    ///for login
    public function index()
    {
        return view("auth.login")->with("page", "Codleo Login");
    }





    public function handlelogin(Request $request)
    {


        // dd($request);
        $credentials = $request->validate([
            'username' => ['required', 'email'],
            'password' => ['required']
        ]);

        $remember=$request->remember;

        // echo Hash::make("admin");
        if (Auth::attempt(['email' => $request->username, 'password' => $request->password],$remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/team');
        } else {
            return redirect()->back()->with("errorcode", "00");
        }



        // $user=$request->username;
        // $password=$request->password;
        // $remember=$request->remember;

        dd($credentials);

        return view('auth.login');
    }





    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }









}
