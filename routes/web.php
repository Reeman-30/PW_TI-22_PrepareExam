<?php

use App\Http\Controllers\coba;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProfileController::class, 'index']);

// Route::get('/coba', [coba::class, 'LatihanPB']);
