<?php

use Illuminate\Support\Facades\Route;
//use App\Http\controllers\UserController;
use App\Http\controllers\ProveedorController;
//use App\Http\Controllers\VendedorController;


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
    return view('welcome');
});

//Route::get('/users/{user_id}', [UserController::class, 'index']);

Route::resource('proveedores', ProveedorController::class);
Route::post('/proveedores', [ProveedorController::class, 'store'])->name('proveedores.store');