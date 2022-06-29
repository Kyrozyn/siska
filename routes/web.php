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

Route::get('/', [\App\Http\Controllers\Account::class, 'gettingStarted']);
Route::get('/login', [\App\Http\Controllers\Account::class, 'login']);
Route::post('/login', [\App\Http\Controllers\Account::class, 'loginaction']);

Route::get('/dashboard', [\App\Http\Controllers\Dashboard::class, 'home']);
Route::get('/dashboard/settings', [\App\Http\Controllers\Dashboard::class, 'settings']);

Route::resource('topiktemuan', \App\Http\Controllers\TopikTemuan::class);
