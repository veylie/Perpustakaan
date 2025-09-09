<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//tampilkan
Route::get('login', [\App\Http\Controllers\LoginController::class, 'login']);
Route::post('login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('login');

Route::middleware('auth')->group(function () {
    route::get('dashboard', [\App\Http\Controllers\HomeController::class, 'index']);
    route::post('logout', [LoginController::class, 'logout']);
    //Anggota:
    route::get('anggota/index', [\App\Http\Controllers\AnggotaController::class, 'index']);
    route::get('anggota/create', [AnggotaController::class, 'create']);
    route::post('anggota/store', [AnggotaController::class, 'store'])->name('anggota.store');
    route::get('anggota/edit/{id}', [AnggotaController::class, 'edit'])->name('anggota.edit');
    route::put('anggota/update/{id}', [AnggotaController::class, 'update'])->name('anggota.update');
    route::delete('anggota/destroy/{id}', [AnggotaController::class, 'softDelete'])->name('anggota.softdelete');
    route::get('anggota/restore', [AnggotaController::class, 'indexRestore']);
    route::get('anggota/restore/{id}', [AnggotaController::class, 'restore'])->name('anggota.restore');
    route::delete('anggota/restore/destroy/{id}', [AnggotaController::class, 'destroy'])->name('anggota.destroy');

    //Lokasi:
    route::get('lokasi/index', [\App\Http\Controllers\LocationController::class, 'index']);
    route::get('lokasi/create', [LocationController::class, 'create']);
    route::post('lokasi/store', [LocationController::class, 'store'])->name('lokasi.store');
    route::get('lokasi/edit/{id}', [LocationController::class, 'edit'])->name('lokasi.edit');
    route::put('lokasi/update/{id}', [LocationController::class, 'update'])->name('lokasi.update');
    route::delete('lokasi/destroy/{id}', [LocationController::class, 'destroy'])->name('lokasi.destroy');

    //Kategori:
    route::get('kategori/index', [\App\Http\Controllers\CategoryController::class, 'index']);
    route::get('kategori/create', [CategoryController::class, 'create']);
    route::post('kategori/store', [CategoryController::class, 'store'])->name('kategori.store');
    route::get('kategori/edit/{id}', [CategoryController::class, 'edit'])->name('kategori.edit');
    route::put('kategori/update/{id}', [CategoryController::class, 'update'])->name('kategori.update');
    route::delete('kategori/destroy/{id}', [CategoryController::class, 'destroy'])->name('kategori.destroy');

    //Buku:
    route::get('buku/index', [\App\Http\Controllers\BookController::class, 'index']);
    route::get('buku/create', [BookController::class, 'create']);
    route::post('buku/store', [BookController::class, 'store'])->name('buku.store');
    route::delete('buku/destroy/{id}', [BookController::class, 'destroy'])->name('buku.destroy');
    route::get('buku/edit/{id}', [BookController::class, 'edit'])->name('buku.edit');
    route::put('buku/update/{id}', [BookController::class, 'update'])->name('buku.update');

    //Transaction
    Route::resource('transaction', App\Http\Controllers\TransactionController::class);
    Route::get('get-buku/{id}', [\App\Http\Controllers\TransactionController::class, 'getBukuByIdCategory']);
    Route::get('print-peminjam/{id}', [\App\Http\Controllers\TransactionController::class, 'print'])->name('print-peminjam');
    Route::post('transaction/{id}/return', [\App\Http\Controllers\TransactionController::class, 'returnBook'])->name('transaction.return');

    //role
    Route::resource('role', RoleController::class);
});
