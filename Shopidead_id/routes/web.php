<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\Jenis_produkController;
use App\Http\Controllers\Kategori_tokohController;
use App\Http\Controllers\TestimoniController;


Route::get('/', function () {
    return view('frontend');
});

Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //routing produk
Route::get('/produk/show', [produkController::class, 'show'])->name('produk.show'); //tampilkan
Route::get('/produk/create', [produkController::class, 'create'])->name('produk.create')->middleware(['auth', 'administrator']); //add
Route::post('/produk/store', [produkController::class, 'store'])->name('produk.store')->middleware(['auth', 'administrator']);
Route::get('/produk/{id}/edit', [produkController::class, 'edit'])->name('produk.edit')->middleware(['auth', 'administrator']); //edit
Route::delete('/produk/{id}', [produkController::class, 'destroy'])->name('produk.destroy')->middleware(['auth', 'administrator']); //delete
Route::get('/produk/{id}', [produkController::class, 'view'])->name('produk.view'); //view

//routing jenis_produk
Route::get('/jenis_produk/show', [Jenis_produkController::class, 'show'])->name('jenis_produk.show')->middleware(['auth', 'administrator']);
Route::get('/jenis_produk/create', [Jenis_produkController::class, 'create'])->name('jenis_produk.create')->middleware(['auth', 'administrator']); //add
Route::post('/jenis_produk/store', [Jenis_produkController::class, 'store'])->name('jenis_produk.store')->middleware(['auth', 'administrator']);
Route::get('/jenis_produk/{id}/edit', [Jenis_produkController::class, 'edit'])->name('jenis_produk.edit')->middleware(['auth', 'administrator']); //edit
Route::delete('/jenis_produk/{id}', [Jenis_produkController::class, 'destroy'])->name('jenis_produk.destroy')->middleware(['auth', 'administrator']); //delete
Route::get('/jenis_produk/{id}', [Jenis_produkController::class, 'view'])->name('jenis_produk.view')->middleware(['auth', 'administrator']); //view

//routing kategori_tokoh
Route::get('/kategori_tokoh/show', [Kategori_tokohController::class, 'show'])->name('kategori_tokoh.show')->middleware(['auth', 'administrator']);
Route::get('/kategori_tokoh/create', [kategori_tokohController::class, 'create'])->name('kategori_tokoh.create')->middleware(['auth', 'administrator']); //add
Route::post('/kategori_tokoh/store', [kategori_tokohController::class, 'store'])->name('kategori_tokoh.store')->middleware(['auth', 'administrator']);
Route::get('/kategori_tokoh/{id}/edit', [kategori_tokohController::class, 'edit'])->name('kategori_tokoh.edit')->middleware(['auth', 'administrator']); //edit
Route::delete('/kategori_tokoh/{id}', [kategori_tokohController::class, 'destroy'])->name('kategori_tokoh.destroy')->middleware(['auth', 'administrator']); //delete
Route::get('/kategori_tokoh/{id}', [kategori_tokohController::class, 'view'])->name('kategori_tokoh.view')->middleware(['auth', 'administrator']); //view

//routing testimoni
Route::get('/testimoni/show', [TestimoniController::class, 'show'])->name('testimoni.show'); //tampilkan
Route::get('/testimoni/create', [TestimoniController::class, 'create'])->name('testimoni.create')->middleware(['auth', 'administrator']); //add
Route::post('/testimoni/store', [TestimoniController::class, 'store'])->name('testimoni.store')->middleware(['auth', 'administrator']);
Route::get('/testimoni/{id}/edit', [TestimoniController::class, 'edit'])->name('testimoni.edit')->middleware(['auth', 'administrator']); //edit
Route::delete('/testimoni/{id}', [TestimoniController::class, 'destroy'])->name('testimoni.destroy')->middleware(['auth', 'administrator']); //delete
Route::get('/testimoni/{id}', [TestimoniController::class, 'view'])->name('testimoni.view'); //view

// profil
Route::get('/profil', function () { //url yang ditampilkan di web
    return view('profil');
    })->name('profil');

// profil
Route::get('/halaman_utama', function () { //url yang ditampilkan di web
    return view('halaman_utama');
    })->name('halaman_utama');

});

require __DIR__.'/auth.php';


