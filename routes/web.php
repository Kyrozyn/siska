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


//route group middleware login
Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', [\App\Http\Controllers\Dashboard::class, 'home']);
    Route::get('/dashboard/settings', [\App\Http\Controllers\Dashboard::class, 'settings']);

    Route::get('/logout',[\App\Http\Controllers\Account::class, 'logout']);
//topiktemuan
    Route::resource('/dashboard/topiktemuan', \App\Http\Controllers\TopikTemuan::class);
//viewmenutemuan
    Route::get('/dashboard/menutemuan/{topik_temuan_id}', [\App\Http\Controllers\MenuTemuan::class, 'index']);
    Route::get('/dashboard/menutemuan/{topik_temuan_id}/menutemuanid/{menu_temuan_id}', [\App\Http\Controllers\MenuTemuan::class, 'index_menu']);
//deletmenutemuan
    Route::delete('/dashboard/menutemuan/delete/{topik_temuan_id}', [\App\Http\Controllers\MenuTemuan::class, 'destroy']);
//addmemutemuan
    Route::get('/dashboard/menutemuan/{topik_temuan_id}/create', [\App\Http\Controllers\MenuTemuan::class, 'create']);
    Route::get('/dashboard/menutemuan/{topik_temuan_id}/create/menutemuanid/{menu_temuan_id}', [\App\Http\Controllers\MenuTemuan::class, 'create']);

//pertanyaantemuan
    Route::get('/dashboard/pertanyaantemuan/{menu_temuan_id}', [\App\Http\Controllers\PertanyaanTemuan::class, 'index']);
    Route::get('/dashboard/pertanyaantemuan/{menu_temuan_id}/create', [\App\Http\Controllers\PertanyaanTemuan::class, 'create']);

//laporan
    Route::get('/dashboard/laporan/front/{topik_temuan_id}', [\App\Http\Controllers\Laporan::class, 'front']);
    Route::get('/dashboard/laporan/front/next/{menu_temuan_id}', [\App\Http\Controllers\Laporan::class, 'next']);

//pertanyaan
    Route::get('/dashboard/laporan/form/{menu_temuan_id}', [\App\Http\Controllers\Laporan::class, 'form']);

    Route::get('/dashboard/laporan/tampil', [\App\Http\Controllers\Laporan::class, 'tampil']);
    Route::get('/dashboard/laporan/tampil/{id_temuan}', [\App\Http\Controllers\Laporan::class, 'detail']);

});
