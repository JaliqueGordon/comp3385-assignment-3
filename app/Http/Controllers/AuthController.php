<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function create(){
        return view('view.login');


    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/login')
            ->withErrors($validator)
            ->withInput();
        
        }

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {

            return redirect('/dashboard')->with('success', 'Login successful!');

        }

        return redirect('/login')
        ->withErrors(['error' => 'Invalid credentials. Check the email address and password entered.'])
        ->withInput();
    
    }

    public function logout()
    {
        Auth:logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/')->with('Success', 'You have logged out successfully.');
    }
    

}
