@extends('dashboard.layouts.mainNoHeader')

@section('container')
    <article class="container">
        <a class="btn btn-warning rounded-0 disabled" href="#">edit</a>
        <a class="btn btn-danger rounded-0 disabled" href="#">hapus</a>

        <h3 class="mt-3">Kategori : <span class="text-primary">{{ $category->name }}</span></h3>
    </article>
@endsection
