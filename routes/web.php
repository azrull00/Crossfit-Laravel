<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WelcomeController;


Route::get('/coba', function () {
    return view('coba', [
        'nama' => 'Raden Adityo',
        'nim' => '2218093',
        'email' => '2218093@scholar.itn.ac.id',
    ]);
});

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/tambah', [CategoryController::class, 'create']);
Route::post('/category/store', [CategoryController::class, 'store']);
Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::put('/category/update/{id}', [CategoryController::class, 'update']);
Route::get('/category/hapus/{id}', [CategoryController::class, 'delete']);
Route::get('/category/destroy/{id}', [CategoryController::class, 'destroy']);
Route::post('/order', [WelcomeController::class, 'CreateTransaction'])->name('transaction');
Route::get('/transaction', [TransactionController::class , 'index']);
Route::get('/',[WelcomeController::class , 'index']) ;
Route::get('/transaction/cetak', [TransactionController::class,'cetak']);


// Rute untuk menampilkan halaman transaksi  
Route::get('/transactions', [TransactionController::class, 'index'])->name('transaction.transaction');  

// Rute untuk menyimpan data transaksi  
Route::post('/transaction/store', [TransactionController::class, 'store'])->name('transaction.store');  