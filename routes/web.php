<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\ProduitController;
use App\Http\Controllers\Admin\CategorieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('client.acceuil');
});
Route::get('/register', function () {
    return view('client.register');
});
Route::prefix('admin')->name('admin.')->group(function(){
Route::resource('produit',ProduitController::class);
Route::resource('categorie',CategorieController::class);
});
Route::get('/login',[AuthController::class,'login'])->name('auth.login');
Route::post('/login',[AuthController::class,'dologin']);
Route::delete('/logout',[AuthController::class,'logout'])->name('auth.logout');
