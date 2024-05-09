<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/cards', function(){
    $cards = config('cards');
    return view('cards', compact('cards'));
});

Route::get('/menues', function(){
    $menues = config('menues');
    return view('menues', compact('menues'));
});
