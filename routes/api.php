<?php

use App\Http\Controllers\Api\SampleController;
use Illuminate\Support\Facades\Route;

Route::apiResource('samples', SampleController::class);