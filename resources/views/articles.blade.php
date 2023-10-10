@extends('layouts.main')

@section('container')
    <div class="container mb-5">
        <div>
            <h3><i class="fa-solid fa-swatchbook text-primary"></i> Daftar Artikel</h3>
        </div>
        @if ($articles->count())
            <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach ($articles as $article)
                    <div class="col">
                        <div class="card h-100 card-course rounded-0 border-primary">
                            <img src="{{ asset('storage/' . $article->image) }}" class="card-img rounded-0" alt="...">
                            <div class="card-body">
                                <div class="fw-semibold mb-3">{{ mb_strimwidth($article->title, 0, 58, '...') }}</div>
                                <div class="text-center">
                                    <a href="/artikel/{{ $article->slug }}" class="btn btn-outline-primary rounded-0">Lihat Selengkapnya</a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-primary alert-dismissible fade show rounded-0" role="alert">
                Artikel Masih Kosong!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
@endsection
