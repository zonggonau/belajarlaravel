<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Route::get('/', function () {
    return view('welcome');
});


// song
Route::prefix('songs')->group(function () {

    Route::controller(SongController::class)->group(function(){

        Route::get('/','index')->name('songs');
        Route::get('/create','create')->name('songs.create');
        Route::get('/edit','edit')->name('songs.edit');

    });

});