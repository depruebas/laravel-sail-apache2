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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::domain('lara-base.local')->group(function () {
    Route::get('/', function () {
        return  view('base');
    });
});

Route::domain('lara-dos.local')->group(function () {
    Route::get('/', function () {
        return  view('dos');
    });
});