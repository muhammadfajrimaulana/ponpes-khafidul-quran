<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('index'); })->name('beranda');
Route::get('/sejarah', function () { return view('sejarah'); })->name('sejarah');
Route::get('/visi-misi', function () { return view('visi'); })->name('visi');
Route::get('/artikel', function () { return view('artikel'); })->name('artikel');
Route::get('/contact', function () { return view('contact'); })->name('kontak');
Route::get('/data-alumni', function () { return view('dataalumni'); })->name('alumni');
Route::get('/data-pengurus', function () { return view('datapengurus'); })->name('pengurus');
Route::get('/data-santri', function () { return view('datasantri'); })->name('santri');
Route::get('/foto', function () { return view('foto'); })->name('foto');
Route::get('/kabar-pondok', function () { return view('kabarpondok'); })->name('kabar-pondok');
Route::get('/ma', function () { return view('ma'); })->name('madrasah-aliyah');
Route::get('/mts', function () { return view('mts'); })->name('madrasah-tsanawiyah');
Route::get('/video', function () { return view('video'); })->name('video');

