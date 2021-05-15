<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{

    public function __construct()
    {
        // $this->middleware('guest:admin');
        // klo login eror ganti yang atas
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }

    public function showLoginForm()
    {
        return view('auth.AdminLogin');
    }

    public function login(Request $request)
    {
        $this->validate($request,[
	    'email'=>'required|email',
    	'password'=>'required|min:5'
    ]);     

    if(Auth::guard('admin')->attempt(['email'=> $request->email, 'password'=> $request->password ], $request->remember))
    {
	    return redirect()->intended(route('admin.home'));
    }

        return redirect()->back()->withInput($request->only('email','remember'));

    }    


    // klo login eror ganti yang atas
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
