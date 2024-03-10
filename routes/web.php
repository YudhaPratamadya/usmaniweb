<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landingpage\LandingpageController;

Route::get('/', [LandingpageController::class, 'index'])->name('landingpage');