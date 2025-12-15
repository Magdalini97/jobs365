<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.homepage');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/positionspage', function () {
    return view('pages.positionspage');
});

Route::get('/newspage', function () {
    return view('pages.newspage');
});

Route::get('/aboutuspage', function () {
    return view('pages.aboutuspage');
});

Route::get('/categorypage', function () {
    return view('pages.categorypage');
});


