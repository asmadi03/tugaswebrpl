<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChashierController;
use App\Http\Controllers\SupplierController;
use App\Models\Category;
use App\Models\Chashier;
use App\Models\Supplier;
use Illuminate\Support\Facades\Route;

Route::get('/category', [CategoryController::class, 'index'])->name('category-index');
Route::get('/category/create', [CategoryController::class, 'tambah'])->name('category-create');
Route::post('/category/store', [CategoryController::class, 'simpan'])->name('category-store');

Route::get('/chashier', [ChashierController::class, 'index'])->name('chashier-index');
Route::get('/chashier/create', [ChashierController::class, 'tambah'])->name('chashier-create');
Route::post('/chashier/store', [ChashierController::class, 'simpan'])->name('chashier-store');

Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier-index');
Route::get('/supplier/create', [SupplierController::class, 'tambah'])->name('supplier-create');
Route::post('/supplier/store', [SupplierController::class, 'simpan'])->name('supplier-store');

// Keterangan route
Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route Utama
Route::get('/mahasiswa', function () {

    $array_nama = ["Haikal", "Ghozi", "Nisa"];

    return view('universitas.mahasiswa')->with('mhs', $array_nama);
});
