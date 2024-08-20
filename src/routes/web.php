<?php

use Illuminate\Support\Facades\Route;
use Pandeydws\Hello\Controllers\HelloController;

Route::get('/package-hello', [HelloController::class, 'index']);
