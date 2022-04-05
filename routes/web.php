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
    return view('principal');
})->name('principal');

Route::get('/catalogo', function () {
    return view('catalogo');
})->name('catalogo');

Route::get('/populares', function () {
    return view('populares');
})->name('populares');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/productos', function () {
    return view('productos');
})->name('productos');

