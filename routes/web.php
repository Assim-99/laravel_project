<?php

use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use Illuminate\Support\Facades\Route;






Route::middleware('auth:admins')->group(function () {

   Route::get('/',  function () {
        return view('admin.index');
    });


    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');




});


 


Route::middleware('guest:admins')->group(function () {

    Route::get('/login', [LoginController::class, 'loginView'])->name('login');
    Route::post('/login', [LoginController::class, 'loginAuth'])->name('loginAction');

    Route::get('/register', [RegisterController::class, 'registerView'])->name('register');
    Route::post('/register', [RegisterController::class, 'registerAuth'])->name('registerAction');


    Route::get('/forgetpassword' , [ForgetPasswordController::class , 'viewForm'])-> name('forgetpassword') ;
    Route::post('/forgetpassword' , [ForgetPasswordController::class , 'forgetPassword'])-> name('password.email');




    Route::get('/reset-password/{token}',[ResetPasswordController::class , 'viewForm'])-> name('password.reset') ;
    Route::post('/resrtpassword',[ResetPasswordController::class , 'resetPassword'])-> name('password.update');

});

