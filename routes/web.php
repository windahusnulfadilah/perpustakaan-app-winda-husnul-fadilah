<?php

use App\Http\Controllers\PeminjamanController;
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


Route::resource('peminjaman', PeminjamanController::class);
Route::put('peminjaman/ubah-status/{id}', [PeminjamanController::class, 'ubahStatus'])->name('peminjaman.ubahStatus');

