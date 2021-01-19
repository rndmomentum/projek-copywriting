<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    /**
     * Show dashboard
     * 
     * 
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * Show login form
     * 
     * 
     */
    public function loginform()
    {
        return view('admin.login');
    }

    /**
     * Check for authentication
     * 
     * 
     */
    public function checklogin(Request $request)
    {
        $this->validate($request,[

            'email' => 'required',
            'password' => 'required' 

        ]);

        $user_detail = array(

            'email' => $request->email,
            'password' => $request->password

        );
        
        if(Auth::guard('admin')->attempt($user_detail)){

            return redirect('admin/dashboard');

        }else{
            
            return back()->with('error','Sorry, Invalid Credentials!');

        }
    }

    /**
     * Admin sign out
     * 
     * 
     */
    public function signout()
    {
        Auth::guard('admin')->logout();

        return redirect('admin/login');
    }
}
