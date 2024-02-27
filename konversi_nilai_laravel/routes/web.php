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

Route::get('/', 'App\Http\Controllers\NilaiController@index');
Route::post('/hitung', 'App\Http\Controllers\NilaiController@hitung');

// Route::get('/', function () {
//     return view('welcome');
// });
