@extends('layouts.app')

@section('title', 'Job')

<x-nav />
@section('content')
    <h2 class="text-3xl pb-3">{{ $job['title'] }}</h2>
    <p class="text-lg text-orange-500">This job pays: {{ $job['salary'] }}</p>
@endsection