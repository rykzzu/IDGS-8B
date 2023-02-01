<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;

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
    return view('/registro');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/registro',);

Route::get('/registro',[RegisterController::class,'index']);
Route::post('/registro',[RegisterController::class,'store']);


Route::get('/inicio', [LoginController::class, 'index'])->name('login');
Route::post('/inicio', [LoginController::class, 'store']);

Route::get('/dashboard', [PostController::class, 'index'])->name('post.index');