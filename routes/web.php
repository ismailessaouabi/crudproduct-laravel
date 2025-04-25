<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



Route::get('/', [ProductController::class, 'welcome']);
Route::resource('products', ProductController::class);
