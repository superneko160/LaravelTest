<?php

use App\Http\Controllers\WellcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WellcomeController::class, 'index']);
