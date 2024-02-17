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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/forms', function () {
    return view('pages.forms.index');
});

Route::get('/buttons', function () {
    return view('pages.ui-features.buttons.index');
});

Route::get('/dropdowns', function () {
    return view('pages.ui-features.dropdowns.index');
});

Route::get('/typography', function () {
    return view('pages.ui-features.typography.index');
});

