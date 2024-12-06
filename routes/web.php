<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/landing', function () {
    return view('landing');
});

Route::get('/categories', [CategoryController::class, 'index']);

// Route to show a single category by its slug
Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);
