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
    return view('home');
})->name('home');

Route::get('/contacts', function () {
    $data = [
        'citta' => 'Maserada sul Piave',
        'indirizzo' => 'Via Monte Pasubio, 61'
    ];
    return view('contacts', $data);
})->name('contacts');
