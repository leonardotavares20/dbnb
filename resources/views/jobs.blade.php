@extends('layouts.app')
o
@section('title', 'Jobs')

<x-nav />
@section('content')
    <h1 class="text-3xl">Jobs page</h1>
    <ul class="mt-10 flex flex-col gap-3">
        @foreach ($jobs as $job)
            <a class="text-lg text-blue-400 underline-offset-[6px] hover:underline" href="job/{{ $job['id'] }}">
                <li><strong>{{ $job['title'] }}</strong></li>
            </a>
        @endforeach
    </ul>
@endsection
