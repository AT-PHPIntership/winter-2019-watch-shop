<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class CheckLoginController extends Controller
{

    // Check Login
    public function checklogin(Request $request)
    {
        $data = [
            'username' => $request->username,
            'password' => $request->password,
        ];
	    if (Auth::attempt($data))
	    {
	    	return redirect()->route('/');
	    }else{
            return redirect()->route('/');
        }       
    }

    // check logout
    public function checklogout()
    {
        Auth::logout();
        return redirect()->route('/');
    }
}
