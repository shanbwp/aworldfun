<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;


class UserLoginController extends Controller
{
   
    public function newlogin()
    {
      
      return view('user.newlogin');
    }
 

    public function login(Request $request) 
    {  
		$this->validate($request,[
                                'email' => 'required|email',
                                'password' => 'required',
                            ]); 
      if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
             return redirect()->intended(route('user-dashboard'));
        }
    
        Session::flash('message',"f");
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('user')->logout();
        return redirect('/admin');
    }
}
