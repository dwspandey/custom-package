<?php

use Illuminate\Support\Facades\Route;
use HelloWorld\Hello\Controllers\HelloController;

Route::get('/package-hello', [HelloController::class, 'index']);
