<?php

use App\Http\Controllers\exportData0252Controller;
use App\Http\Controllers\RakBukuController252;
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
    return view('welcome');
});

Route::get('rak/export', [exportData0252Controller::class, 'export']);
Route::resource('rak0252', RakBukuController252::class);
