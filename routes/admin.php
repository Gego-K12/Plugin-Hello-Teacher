<?php

use Gegok12\HelloTeacher\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

Route::get('/quotes', [QuoteController::class, 'index'])->name('hello-teacher.quotes.index');
Route::get('/quotes/{category}', [QuoteController::class, 'byCategory'])->name('hello-teacher.quotes.category');
