<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $message = 'Message from route: Route::get(/)';
    return Inertia::render('Home', [
        'message' => $message
    ]);
});

Route::get('/about', function () {
    return view('about');
});
