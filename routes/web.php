<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataController;
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

 
Route::any('/', function () {
    return view('Auth.login');
})->name('login');

Route::get('/login', function(){
    return view('Auth/login');
});

Route::get('/register', function(){
    return view('Auth/signup');
})->name('register.form');

Route::get('/table', function(){
    return view('table');
});
Route::get('/forms', function(){
    return view('forms');
});

Route::get('/chart', function(){
    return view('chart');
});

Route::post('/upload', [DataController::class, 'upload'])->name('upload');
Route::get('/home',[DataController::class, 'index'])->name('home');
Route::any('login/check', [HomeController::class, 'login_check'])->name('login.check');
Route::post('register/check', [HomeController::class, 'register'])->name('register');
Route::any('logout', [HomeController::class, 'logout'])->name('logout');

Route::prefix('user')->group(function(){
    Route::get('settings', [UserController::class, 'user_settings'])->name('user.settings');
    Route::any('update/profile', [UserController::class, 'update_profile'])->name('update.profile');
    Route::any('update/password', [UserController::class, 'update_password'])->name('update.password');
});

Route::get('/add', [DataController::class, 'add']);
Route::get('/delete/{id}', [DataController::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [DataController::class, 'edit'])->name('edit');
Route::post('update', [DataController::class, 'update'])->name('update');
