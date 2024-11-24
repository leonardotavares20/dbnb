@extends('layouts.app')

@section('title', 'Jobs')

<x-nav />
@section('content')
    <h1 class="text-3xl">Jobs page</h1>
    @foreach ($jobs as $job)
        <ul>
            <a href="{{ route('job', ['id' => $job['id']]) }}">
                <li><strong>{{ $job['title'] }}</strong> pays: {{ $job['salary'] }} per year</li>
            </a>
        </ul>
    @endforeach
@endsection
