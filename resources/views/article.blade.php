@extends('layouts.main')

@section('container')
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-7 mt-3">
                <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid rounded" alt="">
            </div>
            <div class="col-lg-5 mt-3">
                <h4 class="text-primary">{{ $article->category->name }}</h4>
                <h2>{{ $article->title }}</h2>
                <p class="fw-semibold text-primary">{{ $article->created_at->format('d M Y') }}</p>
                <div class="text-secondary  mb-3 ">{!! $article->body !!}</div>
            </div>
        </div>
    </div>
@endsection
