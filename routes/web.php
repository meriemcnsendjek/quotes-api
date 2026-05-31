<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\QuoteController;

Route::apiResource('quotes', QuoteController::class);