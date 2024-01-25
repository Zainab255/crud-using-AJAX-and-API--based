<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/', [ProductsController::class, 'index'])->name('index');

Route::get('/add_product', [ProductsController::class, 'add'])->name('add_product');

Route::post('/store', [ProductsController::class, 'store'])->name('store');

Route::get('/edit/{id}', [ProductsController::class, 'edit'])->name('edit_product');

Route::get('/update', [ProductsController::class, 'update'])->name('update');

Route::get('/delete/{id}', [ProductsController::class, 'delete'])->name('delete');


?>
