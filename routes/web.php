<?php

use App\Http\Controllers\UserAuth;
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

// Route::get('/', function () {
//     return view('welcome');
// });


//Login Routes
Route::get('/login',[UserAuth::class,'login_page'])->name('login');
Route::post('/login_pro',[UserAuth::class,'login_process'])->name('login_pro');
Route::get('/logout',[UserAuth::class,'logout'])->name('logout');

//Register Routes
Route::get('/register',[UserAuth::class,'register_page'])->name('register');
Route::post('/register_pro',[UserAuth::class,'sign_up'])->name('registerpro');
