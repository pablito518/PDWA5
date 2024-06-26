<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\XmlController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cadastrar', function () {
    return view('cadastrar');
})->middleware(['auth', 'verified'])->name('cadastrar');

Route::post('/cadastrar', [RegisterController::class, 'save'])->middleware(['auth', 'verified'])->name('cadastrar');

Route::get('/data-xml', [XmlController::class, 'createXml'])->middleware(['auth', 'verified'])->name('data-xml');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
