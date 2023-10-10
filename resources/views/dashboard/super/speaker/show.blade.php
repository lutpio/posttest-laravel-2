@extends('dashboard.layouts.mainNoHeader')

@section('container')
    <article class="container">
        <a class="btn btn-warning rounded-0 disabled" href="#">edit</a>
        <a class="btn btn-danger rounded-0 disabled" href="#">hapus</a>
        <div class="row">
            <div class="col-lg-5 mt-3">
                <h2>{{ $speaker->user->name }} - <span class="text-primary fs-light">{{ $speaker->status }}</span></h2>
                <div class="text-secondary">{!! $speaker->note !!}</div>

            </div>
            <div class="col-lg-7 mt-3">
                {{-- <img src="/img/profilmb.jpg" class="img-fluid rounded" alt=""> --}}
                <img src="{{ asset('storage/' . $speaker->photo) }}" class="img-fluid rounded" alt="">
            </div>
        </div>
    </article>
@endsection
