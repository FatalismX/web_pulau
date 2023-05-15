<?php
use App\Http\Controllers\PulauIndonesiaController;
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

Route::get('/', [PulauIndonesiaController::class, 'index' ] );
Route::get('/tambah', [PulauIndonesiaController::class, 'tambah' ] );
Route::post('/tambah', [PulauIndonesiaController::class, 'store' ] );
Route::get('/hapus/{id}', [PulauIndonesiaController::class, 'hapus' ] );
Route::get('/edit/{id}', [PulauIndonesiaController::class, 'edit' ] );
Route::post('/edit/{id}', [PulauIndonesiaController::class, 'update' ] );
Route::get('/lihat/{id}', [PulauIndonesiaController::class, 'lihat' ] );