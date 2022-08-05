<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\SongChordController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('artist')->controller(ArtistController::class)->group(function () {
    Route::get('/', 'index')->name('artist.index');
    Route::get('show', 'show')->name('artist.show');
    Route::get('create', 'create')->name('artist.create');
    Route::post('store', 'store')->name('artist.store');
    Route::post('edit', 'edit');
    Route::post('update', 'update');
    Route::post('delete', 'destroy');
});

Route::prefix('song_chord')->controller(SongChordController::class)->group(function () {
    Route::get('/', 'index')->name('song_chord.index');
    Route::get('show', 'show')->name('song_chord.show');
    Route::get('create', 'create')->name('song_chord.create');
    Route::post('store', 'store')->name('song_chord.store');
    Route::get('edit', 'edit');
    Route::post('update', 'update');
    Route::post('delete', 'destroy');
});
