<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PollController;
use Illuminate\Support\Facades\Route;


Route::resource('/', HomeController::class)->name('index','home');

Route::get('polls/{poll}/votes',  [PollController::class, 'vote'])->name('polls.vote');
//Route::post('polls/{poll}/votes',  [PollController::class, 'vote'])->name('polls.vote');
//Route::post('polls/{poll}',  [PollController::class, 'show'])->name('polls.show');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('polls', PollController::class, ['except' => ['index', 'show']]);
});

Route::resource('polls', PollController::class, ['only' => ['index', 'show']]);

require __DIR__.'/auth.php';
