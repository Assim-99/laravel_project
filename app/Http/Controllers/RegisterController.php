<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    function registerView()
    {
        return view("admin.register");
    }



    function registerAuth(RegisterRequest $request)
    {

       $validData =  $request -> validated() ;

       $validData['password'] = Hash::make($request -> password);
       
      Admin::create($validData) ;

       return view('admin.login'); 
    }
    
}
