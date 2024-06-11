<?php

use Illuminate\Support\Facades\Route;
use App\Livewire;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', Livewire\Auth\Login::class)->name('login');

Route::middleware('auth:web')->group(function () {
    Route::prefix('team-split')->name('team-split.')->group(function () {
        Route::get('', Livewire\TeamSplit\Page\Index::class)->name('index');
        Route::prefix('{teamId}')->group(function () {
            Route::get('', Livewire\TeamSplit\Page\Edit::class)->name('edit');
            Route::get('result', Livewire\TeamSplit\Page\Result::class)->name('result');
        });
    });
});
