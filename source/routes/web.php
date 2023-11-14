<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportController;
use App\Http\Controllers\SwaggerController;

Route::get('/passports', [PassportController::class, 'any']);

Route::get('/swagger/v1', [SwaggerController::class, 'index']);
