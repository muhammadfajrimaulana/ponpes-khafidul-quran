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
    return view('web.profil.pengurus');
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


Route::get('/profile.edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile.update', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile.destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');

// Halaman yang bisa diakses setelah login & diverifikasi
Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('dashboard');
    // Rute khusus Super Admin
    Route::middleware(['role:super_admin'])->group(function () {
        Route::get('/admin/pengurus', [App\Http\Controllers\Dashboard\PengurusController::class, 'index'])->name('admin.pengurus');
        // Tambahkan rute admin lainnya di sini
        Route::get('/admin/santri', [App\Http\Controllers\Dashboard\SantriController::class, 'index'])->name('admin.santri');
        Route::get('/admin/alumni', [App\Http\Controllers\Dashboard\AlumniController::class, 'index'])->name('admin.alumni');
        Route::get('/admin/berita', [App\Http\Controllers\Dashboard\BeritaController::class, 'index'])->name('admin.berita');
        Route::get('/admin/galeri', [App\Http\Controllers\Dashboard\GaleriController::class, 'index'])->name('admin.galeri');
    });

    // Rute khusus Pengurus
    Route::middleware(['role:pengurus'])->group(function () {
        Route::get('/pengurus/santri', [App\Http\Controllers\Dashboard\SantriController::class, 'index'])->name('pengurus.santri');
        // Tambahkan rute pengurus lainnya di sini
        Route::get('/pengurus/alumni', [App\Http\Controllers\Dashboard\AlumniController::class, 'index'])->name('pengurus.alumni');
        Route::get('/pengurus/berita', [App\Http\Controllers\Dashboard\BeritaController::class, 'index'])->name('pengurus.berita');
        Route::get('/pengurus/galeri', [App\Http\Controllers\Dashboard\GaleriController::class, 'index'])->name('pengurus.galeri');
    });
});

require __DIR__ . '/auth.php';
