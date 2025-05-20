<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/', [App\Http\Controllers\ContactController::class, 'show'])->name('index.show');
Route::post('/', [App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');


