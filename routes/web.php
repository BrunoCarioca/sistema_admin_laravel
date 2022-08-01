<?php

use App\Http\Controllers\UserAppController;
use App\Models\UserApp;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/**Rotas para trabalhar com usuários do app*/
Route::get('/usuarios', [UserAppController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/create', [UserAppController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [UserAppController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/{usuario}/edit', [UserAppController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuario/{usuario}', [UserAppController::class, 'update'])->name('usuarios.update');
