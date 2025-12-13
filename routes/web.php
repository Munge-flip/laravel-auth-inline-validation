<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;

Route::get('login', []);

Route::resource('form', FormController::class);