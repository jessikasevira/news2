<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk news
Route::get ('news', [NewsController::class, 'index']);

