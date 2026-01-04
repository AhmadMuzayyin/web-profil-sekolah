<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('pages.home'))->name('home');

Route::prefix('profil')->name('profil.')->group(function () {
    Route::get('/', fn () => view('pages.profil.index'))->name('index');
    Route::get('/sejarah', fn () => view('pages.profil.sejarah'))->name('sejarah');
    Route::get('/visi-misi', fn () => view('pages.profil.visi-misi'))->name('visi-misi');
    Route::get('/struktur-organisasi', fn () => view('pages.profil.struktur-organisasi'))->name('struktur-organisasi');
});

Route::prefix('akademik')->name('akademik.')->group(function () {
    Route::get('/', fn () => view('pages.akademik.index'))->name('index');
    Route::get('/kurikulum', fn () => view('pages.akademik.kurikulum'))->name('kurikulum');
    Route::get('/ekstrakurikuler', fn () => view('pages.akademik.ekstrakurikuler'))->name('ekstrakurikuler');
});

Route::get('/fasilitas', fn () => view('pages.fasilitas'))->name('fasilitas');
Route::get('/galeri', fn () => view('pages.galeri'))->name('galeri');
Route::get('/berita', fn () => view('pages.berita'))->name('berita');
Route::get('/kontak', fn () => view('pages.kontak'))->name('kontak');
