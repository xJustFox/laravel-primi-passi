<?php

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
    $data = [
        'welcome' => 'Hello User!!',
        'peoples' => ['Mario', 'Luigi', 'Giovanni', 'Paolo', 'Francesca', 'Laura', 'Giulia']
    ];
    return view('home', $data);
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/about_us', function () {
    return view('about_us');
})->name('about_us');
