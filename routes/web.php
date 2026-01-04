<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin;

// Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('profil')->name('profil.')->group(function () {
    Route::get('/', [ProfileController::class, 'index'])->name('index');
    Route::get('/sejarah', [ProfileController::class, 'sejarah'])->name('sejarah');
    Route::get('/visi-misi', [ProfileController::class, 'visiMisi'])->name('visi-misi');
    Route::get('/struktur-organisasi', [ProfileController::class, 'strukturOrganisasi'])->name('struktur-organisasi');
});

Route::prefix('akademik')->name('akademik.')->group(function () {
    Route::get('/', [AcademicController::class, 'index'])->name('index');
    Route::get('/kurikulum', [AcademicController::class, 'kurikulum'])->name('kurikulum');
    Route::get('/ekstrakurikuler', [AcademicController::class, 'ekstrakurikuler'])->name('ekstrakurikuler');
});

Route::get('/fasilitas', [FacilityController::class, 'index'])->name('fasilitas');
Route::get('/galeri', [GalleryController::class, 'index'])->name('galeri');

Route::prefix('berita')->name('berita.')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/kategori/{slug}', [PostController::class, 'category'])->name('category');
    Route::get('/{slug}', [PostController::class, 'show'])->name('show');
});

Route::get('/kontak', [ContactController::class, 'index'])->name('kontak');
Route::post('/kontak', [ContactController::class, 'store'])->name('kontak.store');

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/', [Admin\DashboardController::class, 'index'])->name('dashboard');
    
    Route::resource('posts', Admin\PostController::class);
    Route::resource('categories', Admin\CategoryController::class);
    Route::resource('galleries', Admin\GalleryController::class);
    Route::resource('gallery-categories', Admin\GalleryCategoryController::class);
    Route::resource('teachers', Admin\TeacherController::class);
    Route::resource('facilities', Admin\FacilityController::class);
    Route::resource('extracurriculars', Admin\ExtracurricularController::class);
    Route::resource('achievements', Admin\AchievementController::class);
    Route::resource('users', Admin\UserController::class);
    
    Route::get('contacts', [Admin\ContactController::class, 'index'])->name('contacts.index');
    Route::get('contacts/{contact}', [Admin\ContactController::class, 'show'])->name('contacts.show');
    Route::delete('contacts/{contact}', [Admin\ContactController::class, 'destroy'])->name('contacts.destroy');
    Route::patch('contacts/{contact}/read', [Admin\ContactController::class, 'markAsRead'])->name('contacts.read');
    
    Route::get('settings', [Admin\SettingController::class, 'index'])->name('settings.index');
    Route::put('settings', [Admin\SettingController::class, 'update'])->name('settings.update');
    
    Route::get('school-info', [Admin\SchoolInfoController::class, 'edit'])->name('school-info.edit');
    Route::put('school-info', [Admin\SchoolInfoController::class, 'update'])->name('school-info.update');
});
