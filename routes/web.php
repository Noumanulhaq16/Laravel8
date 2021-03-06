<?php

use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UserProfile;
use App\Http\Controllers\Dashboard;
use App\Mail\Sample;
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

Route::middleware(['user_guest'])->group(function () {

//Login Routes

Route::get('/login', [UserAuth::class, 'login_page'])->name('login');
Route::post('/login_pro', [UserAuth::class, 'login_process'])->name('login_pro');


//Register Routes
Route::get('/register', [UserAuth::class, 'register_page'])->name('register');
Route::post('/register_pro', [UserAuth::class, 'sign_up'])->name('registerpro');

});


// General Route


// Route::group(['middleware' => ['user_auth', 'active_user']], function () {
//     Route::get('/profilesetting', [UserProfile::class, 'profilesetting'])->name('profilesetting');
//     //update
//     Route::post('/updateprofile', [UserProfile::class, 'updateprofile'])->name('updateprofile');
//     // Change Password
//     Route::post('/changePassword', [UserProfile::class, 'changePassword'])->name('changePassword');
// });


Route::prefix('user')->namespace('User')->group(function () {
    Route::middleware('user_auth', 'active_user')->group(function () {
        Route::get('/profilesetting', [UserProfile::class, 'profilesetting'])->name('profilesetting');
        //update
        Route::post('/updateprofile', [UserProfile::class, 'updateprofile'])->name('updateprofile');
        // Change Password
        Route::post('/changePassword', [UserProfile::class, 'changePassword'])->name('changePassword');
        //logout
        Route::get('/logout', [UserAuth::class, 'logout'])->name('logout');
        //routeforview
        Route::get('/dashboard', [Dashboard::class, 'dashboard'])->name('dashboard');
    });
});

Route::get('/',function()
{
    return new Sample();
});
