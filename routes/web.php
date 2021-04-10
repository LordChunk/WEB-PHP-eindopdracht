<?php

use App\Http\Controllers\CinemaController;
use App\Http\Controllers\ShowController;
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

Route::resource('cinema', CinemaController::class);
Route::resource('show', ShowController::class);
Route::get('show/{show}/book/{column}/{seat}', [ShowController::class, 'book'])
    ->middleware(['auth'])
    ->name('show.book');

Route::get('show/{show}/book/{column}/{seat}/confirm', [ShowController::class, 'bookConfirm'])
    ->middleware(['auth'])
    ->name('show.book.confirm');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
