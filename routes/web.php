<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $cards = config('cards');
    $menues = config('menues');
    return view('home', compact('cards'), compact('menues'));
})->name('home');

// Route::get('/cards', function(){
//     $cards = config('cards');
//     return view('cards', compact('cards'));
// })->name('cards');

// Route::get('/menues', function(){
//     $menues = config('menues');
//     return view('menues', compact('menues'));
// })->name('menues');
