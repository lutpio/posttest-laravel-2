@extends('dashboard.layouts.mainNoHeader')

@section('container')
    <article class="container">
        <a class="btn btn-warning rounded-0 disabled" href="#">edit</a>
        <a class="btn btn-danger rounded-0 disabled" href="#">hapus</a>
        <div class="row">
            <div class="col-lg-7 mt-3">
                <img src="{{ asset('storage/' . $course->image) }}" class="img-fluid rounded" alt="">
            </div>
            <div class="col-lg-5 mt-3">
                <h4 class="text-primary">{{ $course->speaker->user->name }}</h4>
                <h2>{{ $course->title }}</h2>
                <p class="">Lokasi : {{ $course->location }}</p>
                <div class="text-secondary  mb-3 ">{!! $course->body !!}</div>
                <p class="fw-semibold text-primary">Rp{{ number_format($course->price, 0, '', '.') }}</p>
                <a href="#" class="btn btn-primary rounded-0 w-100 disabled">Ikut Kelas</a>
            </div>
        </div>
    </article>
@endsection
