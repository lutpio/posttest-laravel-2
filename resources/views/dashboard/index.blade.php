@extends('dashboard.layouts.main')

@section('container')
    <div class="container">

        {{-- https://laravel-news.com/laravel-gates-policies-guards-explaine --}}
        {{-- Ada di AppServiceProvider --}}
        @can('super')
            <h1>Suuuuper</h1>
        @endcan
        @can('participant')
            <h1>Participant</h1>
            {{-- <h3 class="text-secondary fw-light">-Function Belum ada</h3> --}}
        @endcan
    </div>
@endsection
