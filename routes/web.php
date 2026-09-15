<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;

Route::get('/tables', [TableController::class, 'index']);