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
    return view('inicio');
}) ->name ('inicio');

Route::get('/productos', function () {
    return view('productos');
})->name('productos');



Route::get('/mision', function () {
    return view('mision');
})->name('mision');
Route::get('/vision', function () {
    return view('vision');
})->name('vision');
Route::get('/valores', function () {
    return view('valores');
})->name('valores');
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');
