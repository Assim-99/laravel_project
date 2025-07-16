<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgetPasswordController extends Controller
{
    
    function viewForm()
    {
        return view('admin.forgotpassword');
    }



    function forgetPassword(Request $request)
    {
        $request -> validate([
            'email' => 'email|required',
        ]);
        
        $statusSendEmail = Password::broker('admins')-> sendResetLink( $request -> only('email')); 

      
        echo $statusSendEmail; 
        return $statusSendEmail == Password::RESET_LINK_SENT 
        ?back()->with('statusForgetEmail', 'E-mail Send Succesfully' ) 
        :back()->with('statusForgetEmail' , 'Error ! '  );
    
}


}
