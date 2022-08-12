<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;



class authController extends Controller
{
    public function Login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            Alert::success('Hello', 'Welcome to your dashboard');

             return redirect()->intended('dashboard');

        }
        Alert::error('Sorry!', 'You are trying to login with wrong details');

        return back()->withSuccess('Login details are not valid');
    }



    public function Registration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:3',

        ]);




        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),


        ]);


        Alert::success("Awesome!","Registration was successful, Please login");


        return redirect("login");
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('login');
    }

}
