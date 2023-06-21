<?php

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
    return view('index');
});

Route::get('/animal', function () {
    return view('animal');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/program', function () {
    return view('program');
});

Route::get('/guideline', function () {
    return view('guideline');
});

Route::get('/join-us', function () {
    return view('join-us');
});

Route::get('/sign-in', function () {
    return view('sign-in');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

