<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    function viewForm( Request $request , $token)
    {
        $email = $request -> query("email") ;
        return view('admin.resetpassword', get_defined_vars());
    }


    function resetPassword(Request $request)
    {

        $dataValid = $request->validate([
            'email'     => ['required', 'string', 'email', 'max:255'],
            'token'    => 'required',
            'password' => ['required', 'string','min:8','confirmed'],
        ]);

        $status = Password::broker("admins")->reset($dataValid ,function(Admin $admin, string $password) {

            $admin->forceFill([
                'password' => Hash::make($password),
            ]);
            $admin->save();
          
        });


        return $status == Password::PASSWORD_RESET 
        ? redirect()->route('login')->with('updatePassword','Password Has Updated')
        :back()->with(['updatePassword' => 'Error !']);



    }
}
