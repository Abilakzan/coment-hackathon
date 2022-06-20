<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CollaboratorController;
use App\Http\Controllers\LiveController;
use App\Http\Controllers\swipeController;
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

//Admin routes
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin',[AdminController::class,'index'])->middleware(['auth'])->name('admin');

    //CRUD pour les lives
    Route::resource("lives", LiveController::class);
    Route::resource("collaborator", CollaboratorController::class);

});

Route::get('/games', function() {
    return view('games');
})->middleware(['auth'])->name('games');

Route::get("/gamesswipe", [swipeController::class, 'index'])->middleware(['auth'])->name('gamesswipe');
Route::get("/postResult", [swipeController::class, 'postResult'])->middleware(['auth'])->name('postResult');

require __DIR__.'/auth.php';
