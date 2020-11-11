<?php

use Illuminate\Support\Facades\Route;

    Route::name('home')->get('/', function (){
        return view('page/home');
    });

Route::name('about')->get('/about-us', function (){
    return view('page/about');
});
