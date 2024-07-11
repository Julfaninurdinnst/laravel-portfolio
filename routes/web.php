<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/dashboard', function(){
    return view('dashboard');
});
Route::get('/login',function(){
    return view('auth.login');
});

Route::post('/postlogin','LoginController')->name('postlogin');
Route::get('/register',function(){
    return view('auth.register');
});
