<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('allow-embed')->group(function () {
    Route::view('/embed/four-grid', 'embed.four-grid')->name('embed.four-grid');
});