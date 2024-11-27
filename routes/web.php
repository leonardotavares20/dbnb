<?php

use Inertia\Inertia;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $message = 'Message from route: Route::get(/)';
    return Inertia::render('Home', [
        'message' => $message
    ]);
});

Route::get('/about', function ()  {
    return view('about', data: [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs', action: function()  {
    return view('jobs', data: [
        'jobs' => Job::all()
    ]);
});

Route::get('/job/{id}',function ($id) { 
    $job = Job::find($id);

    return view('job', data: [
        'job' => $job
    ]);
});
Route::get('/contact', function () {
    return view('contact');
});