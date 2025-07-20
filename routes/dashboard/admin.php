

<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductsController;
use App\Models\Product;



Route::middleware('auth:admins')->group(function () {

    Route::get('/', [ProductsController::class ,'index']);
    Route::get('/create', [ProductsController::class ,'create']) -> name('createproduct') ;

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

});



?>