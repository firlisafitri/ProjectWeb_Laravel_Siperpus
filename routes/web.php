<?php
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\PengembalianController;
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

Route::get('/', function()  {
    return view('home');
});



//Data Buku
Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/destroy/{id}', [BukuController::class, 'destroy']);
Route::post('/buku', [BukuController::class, 'store']);
Route::get('/buku/edit/{id}', [BukuController::class, 'edit']);
Route::post('buku/update', [BukuController::class, 'update']);
Route::view('/buku_input', 'admin.buku_input');

//Data Anggota
Route::get('/anggota', [AnggotaController::class, 'index']);
Route::get('/anggota/destroy/{id}', [AnggotaController::class, 'destroy']);
Route::post('/anggota', [AnggotaController::class, 'store']);
Route::get('/anggota/edit/{id}', [AnggotaController::class, 'edit']);
Route::post('anggota/update', [AnggotaController::class, 'update']);
Route::view('/anggota_input', 'admin.anggota_input');

//Data Karyawan
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/destroy/{id}', [KaryawanController::class, 'destroy']);
Route::post('/karyawan', [KaryawanController::class, 'store']);
Route::get('/karyawan/edit/{id}', [KaryawanController::class, 'edit']);
Route::post('karyawan/update', [KaryawanController::class, 'update']);
Route::view('/karyawan_input', 'admin.karyawan_input');

//Data Peminjam
Route::get('/peminjam', [PeminjamController::class, 'index']);
Route::get('/peminjam/destroy/{id}', [PeminjamController::class, 'destroy']);
Route::post('/peminjam', [PeminjamController::class, 'store']);
Route::get('/peminjam/edit/{id}', [PeminjamController::class, 'edit']);
Route::post('peminjam/update', [PeminjamController::class, 'update']);
Route::view('/peminjam_input', 'admin.peminjam_input');

//Data Pengemballian
Route::get('/pengembalian', [PengembalianController::class, 'index']);
Route::get('/pengembalian/destroy/{id}', [PengembalianController::class, 'destroy']);
Route::post('/pengembalian', [PengembalianController::class, 'store']);
Route::get('/pengembalian/edit/{id}', [PengembalianController::class, 'edit']);
Route::post('pengembalian/update', [PengembalianController::class, 'update']);
Route::view('/pengembalian_input', 'admin.pengembalian_input');

Route::view('/about', 'admin.about');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
