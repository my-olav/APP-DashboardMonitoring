<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ClockController;
use Illuminate\Support\Facades\Route;

Route::get('Dashboard', [ProductController::class, 'index']);
// route::get('Dashboard', [ClockController::class, 'index']);
