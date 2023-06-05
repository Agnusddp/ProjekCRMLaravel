<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KritikSaranController;
use App\Http\Controllers\PoinpController;
use App\Http\Controllers\PenukaranpController;
use App\Http\Controllers\TpelangganController;
use App\Http\Controllers\TkonsumenController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dp', function () {
    return view('dp');
});

Route::get('dpng', function () {
    return view('dpng');
});

Route::get('cstmr', function () {
    return view('cstmr');
});

Route::get('suplier', function () {
    return view('suplier');
});

Route::get('transaksi', function () {
    return view('transaksi');
});

Route::get('point', function () {
    return view('point');
});

Route::get('keritiksaran', function () {
    return view('keritiksaran');
});

Route::get('Data_Pelanggan', function () {
    return view('datapelanggan');
});

Route::get('Data_Konsumen', function () {
    return view('datakonsumen');
});

Route::get('Transaksi_Pelanggan', function () {
    return view('transaksipelanggan');
});

Route::get('Transaksi_Konsumen', function () {
    return view('transaksikonsumen');
});

Route::get('Data_Distributor', function () {
    return view('distributor');
});

Route::get('Data_Barang', function () {
    return view('barang');
});

Route::get('Poin_Pelanggan', function () {
    return view('poinpelanggan');
});

Route::get('penukaranpoin', function () {
    return view('penukaranpoin');
});

Route::get('isikeritiksaran', function () {
    return view('isikeritiksaran');
});

Route::get('laporan', function () {
    return view('laporan');
});

Route::get('profil', function () {
    return view('profil');
});

Route::get('Form-Pegawai', function () {
    return view('Form/form-pegawai');
});

Route::get('Form-Pengguna', function () {
    return view('Form/form-pengguna');
});

Route::get('Form-Pelanggan', function () {
    return view('Form/form-pelanggan');
});

Route::get('Form-Konsumen', function () {
    return view('Form/form-konsumen');
});

Route::get('Form-Transaksi-Pelanggan', function () {
    return view('Form/form-transaksi-pelanggan');
});

Route::get('Form-Transaksi-Konsumen', function () {
    return view('Form/form-transaksi-konsumen');
});

Route::get('Form-Distributor', function () {
    return view('Form/form-distributor');
});

Route::get('Form-Barang', function () {
    return view('Form/form-barang');
});

Route::get('Form-Poin-Pelanggan', function () {
    return view('Form/form-poin-pelanggan');
});

Route::get('Form-Penukaran', function () {
    return view('Form/form-penukaran');
});

Route::get('/Pegawai',[PegawaiController::class, 'index'])->name('Pegawai');
//route Input Data Pegawai
Route::get('/iPegawai', [PegawaiController::class, 'iPegawai'])->name('iPegawai');
//Route Insert Data Pegawai
Route::post('/instPegawai', [PegawaiController::class, 'instPegawai'])->name('instPegawai');
//Route Tampilkan Data Pegawai Untuk edit
Route::get('/editPegawai/{id}', [PegawaiController::class, 'editPegawai'])->name('editPegawai');
//Route Update Data Pegawai
Route::post('/updatePegawai/{id}', [PegawaiController::class, 'updatePegawai'])->name('updatePegawai');
//Route Hapus Data Pegawai
Route::get('/delPegawai/{id}', [PegawaiController::class, 'delPegawai'])->name('delPegawai');
//Route Hapus Data Pegawai
Route::get('/exportPegawai/{id}', [PegawaiController::class, 'exportPegawai'])->name('exportPegawai');
//Route Data Pegawai
Route::get('/rPegawai', function () {
    return view('menu_input_data.Pegawai');
});

Route::get('/Pengguna',[PenggunaController::class, 'index'])->name('Pengguna');
//route Input Data Pengguna
Route::get('/iPengguna', [PenggunaController::class, 'iPengguna'])->name('iPengguna');
//Route Insert Data Pengguna
Route::post('/instPengguna', [PenggunaController::class, 'instPengguna'])->name('instPengguna');
//Route Tampilkan Data Pengguna Untuk edit
Route::get('/editPengguna/{id}', [PenggunaController::class, 'editPengguna'])->name('editPengguna');
//Route Update Data Pengguna
Route::post('/updatePengguna/{id}', [PenggunaController::class, 'updatePengguna'])->name('updatePengguna');
//Route Hapus Data Pengguna
Route::get('/delPengguna/{id}', [PenggunaController::class, 'delPengguna'])->name('delPengguna');
//Route Data Pengguna
Route::get('/rPengguna', function () {
    return view('menu_input_data.Pengguna');
});

Route::get('/Pelanggan',[PelangganController::class, 'index'])->name('Pelanggan');
//route Input Data Pelanggan
Route::get('/iPelanggan', [PelangganController::class, 'iPelanggan'])->name('iPelanggan');
//Route Insert Data Pelanggan
Route::post('/instPelanggan', [PelangganController::class, 'instPelanggan'])->name('instPelanggan');
//Route Tampilkan Data Pelanggan Untuk edit
Route::get('/editPelanggan/{id}', [PelangganController::class, 'editPelanggan'])->name('editPelanggan');
//Route Update Data Pelanggan
Route::post('/updatePelanggan/{id}', [PelangganController::class, 'updatePelanggan'])->name('updatePelanggan');
//Route Hapus Data Pelanggan
Route::get('/delPelanggan/{id}', [PelangganController::class, 'delPelanggan'])->name('delPelanggan');
//Route Data Pelanggan
Route::get('/rPelanggan', function () {
    return view('menu_input_data.Pelanggan');
});

Route::get('/Konsumen',[KonsumenController::class, 'index'])->name('Konsumen');
//route Input Data Konsumen
Route::get('/iKonsumen', [KonsumenController::class, 'iKonsumen'])->name('iKonsumen');
//Route Insert Data Konsumen
Route::post('/instKonsumen', [KonsumenController::class, 'instKonsumen'])->name('instKonsumen');
//Route Tampilkan Data Konsumen Untuk edit
Route::get('/editKonsumen/{id}', [KonsumenController::class, 'editKonsumen'])->name('editKonsumen');
//Route Update Data Konsumen
Route::post('/updateKonsumen/{id}', [KonsumenController::class, 'updateKonsumen'])->name('updateKonsumen');
//Route Hapus Data Konsumen
Route::get('/delKonsumen/{id}', [KonsumenController::class, 'delKonsumen'])->name('delKonsumen');
//Route Data Konsumen
Route::get('/rKonsumen', function () {
    return view('menu_input_data.Konsumen');
});

Route::get('/Distributor',[DistributorController::class, 'index'])->name('Distributor');
//route Input Data Distributor
Route::get('/iDistributor', [DistributorController::class, 'iDistributor'])->name('iDistributor');
//Route Insert Data Distributor
Route::post('/instDistributor', [DistributorController::class, 'instDistributor'])->name('instDistributor');
//Route Tampilkan Data Distributor Untuk edit
Route::get('/editDistributor/{id}', [DistributorController::class, 'editDistributor'])->name('editDistributor');
//Route Update Data Distributor
Route::post('/updateDistributor/{id}', [DistributorController::class, 'updateDistributor'])->name('updateDistributor');
//Route Hapus Data Distributor
Route::get('/delDistributor/{id}', [DistributorController::class, 'delDistributor'])->name('delDistributor');
//Route Data Distributor
Route::get('/rDistributor', function () {
    return view('menu_input_data.Distributor');
});

Route::get('/Barang',[BarangController::class, 'index'])->name('Barang');
//route Input Data Barang
Route::get('/iBarang', [BarangController::class, 'iBarang'])->name('iBarang');
//Route Insert Data Barang
Route::post('/instBarang', [BarangController::class, 'instBarang'])->name('instBarang');
//Route Tampilkan Data Barang Untuk edit
Route::get('/editBarang/{id}', [BarangController::class, 'editBarang'])->name('editBarang');
//Route Update Data Barang
Route::post('/updateBarang/{id}', [BarangController::class, 'updateBarang'])->name('updateBarang');
//Route Hapus Data Barang
Route::get('/delBarang/{id}', [BarangController::class, 'delBarang'])->name('delBarang');
//Route Data Barang
Route::get('/rBarang', function () {
    return view('menu_input_data.Barang');
});

Route::get('/KritikSaran',[KritikSaranController::class, 'index'])->name('KritikSaran');
//route Input Data KritikSaran
Route::get('/iKritikSaran', [KritikSaranController::class, 'iKritikSaran'])->name('iKritikSaran');
//Route Insert Data KritikSaran
Route::post('/instKritikSaran', [KritikSaranController::class, 'instKritikSaran'])->name('instKritikSaran');
//Route Tampilkan Data KritikSaran Untuk edit
Route::get('/editKritikSaran/{id}', [KritikSaranController::class, 'editKritikSaran'])->name('editKritikSaran');
//Route Update Data KritikSaran
Route::post('/updateKritikSaran/{id}', [KritikSaranController::class, 'updateKritikSaran'])->name('updateKritikSaran');
//Route Hapus Data KritikSaran
Route::get('/delKritikSaran/{id}', [KritikSaranController::class, 'delKritikSaran'])->name('delKritikSaran');
//Route Data KritikSaran
Route::get('/rKritikSaran', function () {
    return view('menu_input_data.KritikSaran');
});

Route::get('/Poinp',[PoinpController::class, 'index'])->name('Poinp');
//route Input Data Poinp
Route::get('/iPoinp', [PoinpController::class, 'iPoinp'])->name('iPoinp');
//Route Insert Data Poinp
Route::post('/instPoinp', [PoinpController::class, 'instPoinp'])->name('instPoinp');
//Route Tampilkan Data Poinp Untuk edit
Route::get('/editPoinp/{id}', [PoinpController::class, 'editPoinp'])->name('editPoinp');
//Route Update Data Poinp
Route::post('/updatePoinp/{id}', [PoinpController::class, 'updatePoinp'])->name('updatePoinp');
//Route Hapus Data Poinp
Route::get('/delPoinp/{id}', [PoinpController::class, 'delPoinp'])->name('delPoinp');
//Route Data Poinp
Route::get('/rPoinp', function () {
    return view('menu_input_data.Poinp');
});

Route::get('/Tpelanggan',[TpelangganController::class, 'index'])->name('Tpelanggan');
//route Input Data Tpelanggan
Route::get('/iTpelanggan', [TpelangganController::class, 'iTpelanggan'])->name('iTpelanggan');
//Route Insert Data Tpelanggan
Route::post('/instTpelanggan', [TpelangganController::class, 'instTpelanggan'])->name('instTpelanggan');
//Route Tampilkan Data Tpelanggan Untuk edit
Route::get('/editTpelanggan/{id}', [TpelangganController::class, 'editTpelanggan'])->name('editTpelanggan');
//Route Update Data Tpelanggan
Route::post('/updateTpelanggan/{id}', [TpelangganController::class, 'updateTpelanggan'])->name('updateTpelanggan');
//Route Hapus Data Tpelanggan
Route::get('/delTpelanggan/{id}', [TpelangganController::class, 'delTpelanggan'])->name('delTpelanggan');
//Route Data Tpelanggan
Route::get('/rTpelanggan', function () {
    return view('menu_input_data.Tpelanggan');
});

Route::get('/Penukaranp',[PenukaranpController::class, 'index'])->name('Penukaranp');
//route Input Data Penukaranp
Route::get('/iPenukaranp', [PenukaranpController::class, 'iPenukaranp'])->name('iPenukaranp');
//Route Insert Data Penukaranp
Route::post('/instPenukaranp', [PenukaranpController::class, 'instPenukaranp'])->name('instPenukaranp');
//Route Tampilkan Data Penukaranp Untuk edit
Route::get('/editPenukaranp/{id}', [PenukaranpController::class, 'editPenukaranp'])->name('editPenukaranp');
//Route Update Data Penukaranp
Route::post('/updatePenukaranp/{id}', [PenukaranpController::class, 'updatePenukaranp'])->name('updatePenukaranp');
//Route Hapus Data Penukaranp
Route::get('/delPenukaranp/{id}', [PenukaranpController::class, 'delPenukaranp'])->name('delPenukaranp');
//Route Data Penukaranp
Route::get('/rPenukaranp', function () {
    return view('menu_input_data.Penukaranp');
});

Route::get('/Tkonsumen',[TkonsumenController::class, 'index'])->name('Tkonsumen');
//route Input Data Tkonsumen
Route::get('/iTkonsumen', [TkonsumenController::class, 'iTkonsumen'])->name('iTkonsumen');
//Route Insert Data Tkonsumen
Route::post('/instTkonsumen', [TkonsumenController::class, 'instTkonsumen'])->name('instTkonsumen');
//Route Tampilkan Data Tkonsumen Untuk edit
Route::get('/editTkonsumen/{id}', [TkonsumenController::class, 'editTkonsumen'])->name('editTkonsumen');
//Route Update Data Tkonsumen
Route::post('/updateTkonsumen/{id}', [TkonsumenController::class, 'updateTkonsumen'])->name('updateTkonsumen');
//Route Hapus Data Tkonsumen
Route::get('/delTkonsumen/{id}', [TkonsumenController::class, 'delTkonsumen'])->name('delTkonsumen');
//Route Data Tkonsumen
Route::get('/rTkonsumen', function () {
    return view('menu_input_data.Tkonsumen');
});