<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ChatController;

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);

Route::get('/chat', [ChatController::class, 'index']);
Route::post('/chat/ask', [ChatController::class, 'ask']);