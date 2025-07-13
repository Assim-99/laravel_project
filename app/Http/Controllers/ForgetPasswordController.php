<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgetPasswordController extends Controller
{
    
    function viewForm()
    {
        return view('admin.forgotpassword');
    }

    function forgetPassword( Request $request )
    {
        dump( $request -> all() ) ;
    }
}
