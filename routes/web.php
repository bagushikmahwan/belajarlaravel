<?php

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

Route::get('/mahasiswa', function () {
    return 'ini halaman mahasiswa';
})->name('mahasiswa.index');

Route::get('/mahasiswa/detail/{nim?}', function ($nim='123') {
    return 'ini halaman mahasiswa nim = '.$nim;
})->name('mahasiswa.detail');

Route::get('/dosen', function () {
    return 'ini halaman dosen';
});

Route::resource('jurusan', JurusanController::class);

Route::resource('matakuliah', MataKuliahController::class);

