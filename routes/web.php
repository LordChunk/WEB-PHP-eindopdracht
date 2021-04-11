<?php

use App\Http\Controllers\CinemaController;
use App\Http\Controllers\FestivalController;
use App\Http\Controllers\FestivalTicketUserController;
use App\Http\Controllers\OrderableController;
use App\Http\Controllers\RestaurantController;
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
    return view('home');
})->name('dashboard');

Route::get('/dashboard', function () {
    return redirect('/');
});

Route::resource('festivals', FestivalController::class);
Route::resource('restaurants', RestaurantController::class);
Route::resource('cinema', CinemaController::class);
Route::resource('orderables', OrderableController::class);
Route::resource('show', ShowController::class);
Route::resource('festivalticketusers', FestivalTicketUserController::class);

Route::get('show/{show}/book/{column}/{seat}', [ShowController::class, 'book'])
    ->middleware(['auth'])
    ->name('show.book');

Route::get('show/{show}/book/{column}/{seat}/confirm', [ShowController::class, 'bookConfirm'])
    ->middleware(['auth'])
    ->name('show.book.confirm');

Route::get('festivals/{show}/buy', [FestivalController::class, 'buy'])
    ->middleware(['auth'])
    ->name('festivals.buy');



require __DIR__.'/auth.php';
