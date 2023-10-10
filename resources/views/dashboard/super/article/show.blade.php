@extends('dashboard.layouts.mainNoHeader')

@section('container')
    <article class="container">
        <a class="btn btn-warning rounded-0 disabled" href="#">edit</a>
        <a class="btn btn-danger rounded-0 disabled" href="#">hapus</a>

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
    </article>
@endsection
