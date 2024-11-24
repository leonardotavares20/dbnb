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
    return view('about', data: [
        'jobs' => [
            [
                'title' => 'Software Engineer',
                'salary' => '$100,000',
            ],
            [
                'title' => 'Teacher',
                'salary' => '$80,000',
            ],
            [
                'title' => 'Manager',
                'salary' => '$120,000',
            ],
        ]
    ]);
});

Route::get('/jobs', action: function() {
    return view('jobs', data: [
        'jobs' => [
            [
                'title' => 'Software Engineer',
                'salary' => '$100,000',
            ],
            [
                'title' => 'Teacher',
                'salary' => '$80,000',
            ],
            [
                'title' => 'Manager',
                'salary' => '$120,000',
            ],
        ]
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});