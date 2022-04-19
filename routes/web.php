<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengumumanController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::group(['prefix' => 'pengumuman', 'as' => 'pengumuman.'], function(){
// });

Route::get('/', [PengumumanController::class, 'index'])->name('home');
Route::get('/buat', [PengumumanController::class, 'create'])->name('pengumuman.tambah-data');
Route::post('/buat-data', [PengumumanController::class, 'store'])->name('pengumuman.buat-data');

Route::get('/edit/{id}', [PengumumanController::class, 'edit'])->name('pengumuman.edit');

Route::post('/update/{id}', [PengumumanController::class, 'update'])->name('pengumuman.update-data');

// Delete
Route::delete('/delete/{id}', [PengumumanController::class, 'destroy'])->name('pengumuman.destroy');

// Detail
Route::get('/detail/{id}', [PengumumanController::class, 'show'])->name('pengumuman.detail');

