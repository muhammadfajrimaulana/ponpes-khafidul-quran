<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\PengurusController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\SantriController;
use App\Http\Controllers\Dashboard\AlumniController;
use App\Http\Controllers\Dashboard\BeritaController;
use App\Http\Controllers\Dashboard\GaleriController;

Route::get('/', function () {
    return view('web.index');
});

Route::get('/beranda', function () {
    return view('web.index');
})->name('beranda');
Route::get('/contact', function () {
    return view('web.contact');
})->name('contact');
Route::get('/sejarah', function () {
    return view('web.profil.Sejarah');
})->name('sejarah');
Route::get('/visi', function () {
    return view('web.profil.Visi');
})->name('visi');
Route::get('/pengurus', function () {
    return view('web.profil.datapengurus');
})->name('pengurus');
Route::get('/madrasah-tsanawiyah', function () {
    return view('web.jenjang.mts');
})->name('madrasah-tsanawiyah');
Route::get('/madrasah-aliyah', function () {
    return view('web.jenjang.mah');
})->name('madrasah-aliyah');
Route::get('/kabar-pondok', function () {
    return view('web.berita.kabarpondok');
})->name('kabar-pondok');
Route::get('/artikel', function () {
    return view('web.berita.artikel');
})->name('artikel');
Route::get('/santri', function () {
    return view('web.dokumen.datasantri');
})->name('santri');
Route::get('/alumni', function () {
    return view('web.dokumen.dataalumni');
})->name('alumni');
Route::get('/foto', function () {
    return view('web.galeri.foto');
})->name('foto');
Route::get('/video', function () {
    return view('web.galeri.video');
})->name('video');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::middleware(['auth'])->group(function () {

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Rute Admin & Pengurus (tetap seperti yang kamu buat)
    Route::middleware(['role:super_admin'])->group(function () {
        Route::get('/admin/pengurus', [PengurusController::class, 'index'])->name('admin.pengurus');
        Route::get('/admin/create-pengurus', [PengurusController::class, 'create'])->name('admin.create-pengurus');
        Route::post('/admin/store-pengurus', [PengurusController::class, 'store'])->name('admin.store-pengurus');
        Route::get('/admin/edit-pengurus/{id}', [PengurusController::class, 'edit'])->name('admin.edit-pengurus');
        Route::put('/admin/update-pengurus/{id}', [PengurusController::class, 'update'])->name('admin.update-pengurus');
        Route::delete('/admin/delete-pengurus/{id}', [PengurusController::class, 'destroy'])->name('admin.delete-pengurus');

        Route::get('/admin/santri', [SantriController::class, 'index'])->name('admin.santri');
        Route::get('/admin/create-santri', [SantriController::class, 'create'])->name('admin.create-santri');
        Route::post('/admin/store-santri', [SantriController::class, 'store'])->name('admin.store-santri');
        Route::get('/admin/edit-santri/{id}', [SantriController::class, 'edit'])->name('admin.edit-santri');
        Route::put('/admin/update-santri/{id}', [SantriController::class, 'update'])->name('admin.update-santri');
        Route::delete('/admin/delete-santri/{id}', [SantriController::class, 'destroy'])->name('admin.delete-santri');

        Route::get('/admin/alumni', [AlumniController::class, 'index'])->name('admin.alumni');
        Route::get('/admin/alumni/{id}/edit', [AlumniController::class, 'edit'])->name('alumni.edit');
        Route::put('/admin/alumni/{id}', [AlumniController::class, 'update'])->name('alumni.update');
        Route::get('/admin/berita', [BeritaController::class, 'index'])->name('admin.berita');
        Route::get('/admin/create-berita', [BeritaController::class, 'create'])->name('admin.create-berita');
        Route::post('/admin/store-berita', [BeritaController::class, 'store'])->name('admin.store-berita');
        Route::get('/admin/edit-berita/{id}', [BeritaController::class, 'edit'])->name('admin.edit-berita');
        Route::put('/admin/update-berita/{id}', [BeritaController::class, 'update'])->name('admin.update-berita');
        Route::delete('/admin/delete-berita/{id}', [BeritaController::class, 'destroy'])->name('admin.delete-berita');

        Route::get('/admin/galeri', [GaleriController::class, 'index'])->name('admin.galeri');
        Route::get('/admin/create-galeri', [GaleriController::class, 'create'])->name('admin.create-galeri');
        Route::post('/admin/store-galeri', [GaleriController::class, 'store'])->name('admin.store-galeri');
        Route::get('/admin/edit-galeri/{id}', [GaleriController::class, 'edit'])->name('admin.edit-galeri');
        Route::put('/admin/update-galeri/{id}', [GaleriController::class, 'update'])->name('admin.update-galeri');
        Route::delete('/admin/delete-galeri/{id}', [GaleriController::class, 'destroy'])->name('admin.delete-galeri');
    });

    Route::middleware(['role:pengurus'])->group(function () {
        Route::get('/pengurus/santri', [SantriController::class, 'index'])->name('pengurus.santri');
        Route::get('/pengurus/alumni', [AlumniController::class, 'index'])->name('pengurus.alumni');
        Route::get('/pengurus/berita', [BeritaController::class, 'index'])->name('pengurus.berita');
        Route::get('/pengurus/galeri', [GaleriController::class, 'index'])->name('pengurus.galeri');
    });
});

require __DIR__ . '/auth.php';
