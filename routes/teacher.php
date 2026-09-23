<?php

use Gegok12\HelloTeacher\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

Route::get('/inspiration', [QuoteController::class, 'index'])->name('hello-teacher.inspiration.index');
Route::get('/inspiration/{category}', [QuoteController::class, 'byCategory'])->name('hello-teacher.inspiration.category');
