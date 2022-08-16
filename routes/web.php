<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PollController;
use Illuminate\Support\Facades\Route;


Route::resource('/', HomeController::class)->name('index','home');


Route::group(['middleware' => 'auth'], function () {
    Route::resource('polls', PollController::class, ['except' => ['index', 'show', 'vote']]);
});

Route::resource('polls', PollController::class, ['only' => ['index', 'show', 'vote']]);

Route::post('polls/{poll}',  [PollController::class, 'vote'])->name('polls.vote');
require __DIR__.'/auth.php';
