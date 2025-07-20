<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPasswordController;


Route::middleware('guest:admins')->group(function () {

    Route::get('/login', [LoginController::class, 'loginView'])->name('login');
    Route::post('/login', [LoginController::class, 'loginAuth'])->name('loginAction');

    /*  
        ================ no register page to dashboard ========== 
        Route::get('/register', [RegisterController::class, 'registerView'])->name('register');
        Route::post('/register', [RegisterController::class, 'registerAuth'])->name('registerAction');
    */

    Route::get('/forgetpassword' , [ForgetPasswordController::class , 'viewForm'])-> name('forgetpassword') ;
    Route::post('/forgetpassword' , [ForgetPasswordController::class , 'forgetPassword'])-> name('password.email');


    Route::get('/reset-password/{token}',[ResetPasswordController::class , 'viewForm'])-> name('password.reset') ;
    Route::post('/resrtpassword',[ResetPasswordController::class , 'resetPassword'])-> name('password.update');

});


?>