<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

// Route::get(' / ', function()
// {
// 	return View::make('hello');
// });

Route::controller('home', 'App\Controllers\HomeController');
Route::controller('dashboard', 'App\Controllers\DashboardController');

//master group controller
Route::group(array('prefix' => 'master'), function() {
    Route::controller('takad', 'App\Controllers\TakadController');
    Route::controller('semester', 'App\Controllers\SemesterController');
    Route::controller('jenjang', 'App\Controllers\JenjangController');
    Route::controller('fakultas', 'App\Controllers\FakultasController');
    Route::controller('prodi', 'App\Controllers\ProdiController');
    Route::controller('matkul', 'App\Controllers\MatkulController');
    Route::controller('pegawai', 'App\Controllers\PegawaiController');
    Route::controller('mahasiswa', 'App\Controllers\MahasiswaController');
    Route::controller('jabatan', 'App\Controllers\JabatanController');
	Route::controller('gapok', 'App\Controllers\GapokController');
	Route::controller('tunjangan', 'App\Controllers\TunjanganController');
    Route::controller('departemen', 'App\Controllers\DepartemenController');
    Route::controller('ruang', 'App\Controllers\RuangController');
    Route::controller('group', 'App\Controllers\GroupController');
    Route::controller('user', 'App\Controllers\UserController');
    Route::controller('biaya', 'App\Controllers\BiayaController');
});

//pmb group controller
Route::group(array('prefix' => 'pmb'), function() {
    Route::controller('setting', 'App\Controllers\PmbsettingController');
    Route::controller('regis', 'App\Controllers\PmbregistrasiController');
    Route::controller('calon', 'App\Controllers\CalonmhsController');
    Route::controller('penilaian', 'App\Controllers\PenilaianController');
    Route::controller('selek', 'App\Controllers\PmbseleksiController');
});

//akademik group controller
Route::group(array('prefix' => 'akademik'), function() {
    Route::controller('penilaian', 'App\Controllers\PenilaiankulController');
    Route::controller('absensi', 'App\Controllers\AbsensiController');
    Route::controller('krs', 'App\Controllers\KrsController');
    Route::controller('khs', 'App\Controllers\KhsController');
    Route::controller('pkp', 'App\Controllers\PkpController');
    Route::controller('pta', 'App\Controllers\PtaController');
    Route::controller('ips', 'App\Controllers\IpsController');
    Route::controller('wisuda', 'App\Controllers\WisudaController');
});

//administrasi group controller
Route::group(array('prefix' => 'administrasi'), function() {
    Route::controller('pembayaran', 'App\Controllers\PembayaranController');
});

//pegawai group controller
Route::group(array('prefix' => 'pegawai'), function() {
    Route::controller('absensi', 'App\Controllers\AbsensipegController');
	Route::controller('cuti', 'App\Controllers\CutiController');
    Route::controller('gaji', 'App\Controllers\GajiController');
});
