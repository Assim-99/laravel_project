<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

});

