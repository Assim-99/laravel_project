<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    function loginView()
    {
        return view("admin.login");
    }



    function loginAuth(LoginRequest $request)
    {

    

        $request->validated();
        $validData['username'] = $request->username;
        $validData['password'] = $request->password;


        if ($request->has('remember')) {

            if (Auth::guard('admins')->attempt($validData, true)) {
                $request->session()->regenerate();
                return redirect("/");
            }
        }
        return redirect()->route('login');
    }



    function logout(Request $request)
    {
        Auth::guard('admins')->logout();
        
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect() -> route('login');
    }
}
