<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/actualites', function () {
    return view('actualites');
})->middleware(['auth'])->name('actualites');

Route::get('/formation', function () {
    return view('formation');
})->middleware(['auth'])->name('formation');

Route::get('/live', function () {
    return view('live');
})->middleware(['auth'])->name('live');

Route::get('/calendrier', function () {
    return view('calendrier');
})->middleware(['auth'])->name('calendrier');

Route::get('/search', function () {
    return view('search');
})->middleware(['auth'])->name('search');

Route::get('/campagne', function () {
    return view('campagne');
})->middleware(['auth'])->name('campagne');

require __DIR__.'/auth.php';
