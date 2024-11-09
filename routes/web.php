<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;

Route::get('/test_api', [apiController::class,'getVideo']);
