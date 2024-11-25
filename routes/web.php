<?php

use Illuminate\Support\Arr;
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
                'id' => 1,
                'title' => 'Software Engineer',
                'salary' => '$100,000',
            ],
            [
                'id'=> 2,
                'title' => 'Teacher',
                'salary' => '$80,000',
            ],
            [
                'id'=> 3,
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
                'id' => 1,
                'title' => 'Software Engineer',
                'salary' => '$100,000',
            ],
            [
                'id' => 2,
                'title' => 'Teacher',
                'salary' => '$80,000',
            ],
            [
                'id' => 3,
                'title' => 'Manager',
                'salary' => '$120,000',
            ],
        ]
    ]);
});

Route::get('/job/{id}',function ($id) {    
    $jobs = [
        [
            'id' => 1,
            'title' => 'Software Engineer',
            'salary' => '$100,000',
        ],
        [
            'id'=> 2,
            'title' => 'Teacher',
            'salary' => '$80,000',
        ],
        [
            'id'=> 3,
            'title' => 'Manager',
            'salary' => '$120,000',
        ],
    ];

   $job = Arr::first($jobs, fn ($job) => $job['id'] == $id);

    return view('job', data: [
        'job' => $job
    ]);
});
Route::get('/contact', function () {
    return view('contact');
});