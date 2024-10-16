<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/transaction', [TransactionController::class, 'showAllTransactions']); 
Route::get('/transaction/create', [TransactionController::class, 'createTransaction'])->name('createTransaction');
Route::post('/transaction/store', [TransactionController::class, 'storeTransaction'])->name('storeTransaction');
Route::get('/transaction/{id}', [TransactionController::class, 'viewTransaction'])->name('viewTransaction'); 
Route::get('/transaction/edit/{id}', [TransactionController::class, 'editTransaction'])->name('edit.transaction');
Route::post('/transaction/update/{id}', [TransactionController::class, 'updateTransaction'])->name('update.transaction');
