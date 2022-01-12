<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProductsController::class, 'index']);
Route::get('cart', [ProductsController::class, 'cart']);
Route::get('add-to-cart/{id}', [ProductsController::class, 'addToCart']);
Route::get('update-cart', [ProductsController::class, 'update']);
Route::get('remove-from-cart', [ProductsController::class, 'remove']);
