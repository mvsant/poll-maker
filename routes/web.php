<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PollController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::resource('/', HomeController::class)->name('index','home');

/* Route::get('/polls', function () {
    return view('polls');
})->middleware(['auth'])->name('polls'); */

Route::group(['middleware' => 'auth'], function () {
    Route::resource('polls', PollController::class, ['except' => ['index', 'show']]);
});

Route::resource('polls', PollController::class, ['only' => ['index', 'show']]);


//Route::resource('/polls', PollController::class)->middleware(['auth']);

require __DIR__.'/auth.php';
