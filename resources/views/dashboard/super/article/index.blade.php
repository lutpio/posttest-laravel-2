@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <h1 class="fw-semibold mb-3">Artikel <i class="fa-solid fa-newspaper text-primary"></i></h1>
        @if ($categoryy)
            <a href="/dashboard/super/article/create" class="btn btn-primary rounded-0 mb-3">Buat Artikel</a>
        @else
            <a href="/dashboard/super/article/create" class="btn btn-primary disabled rounded-0 mb-3">Buat Artikel</a>
        @endif

        @if ($articles->count())
            <div class="table-responsive">
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $article->title }}</td>
                                <td>{{ $article->created_at->format('d M Y') }}</td>
                                <td>
                                    <a class="btn btn-outline-primary rounded-0"
                                        href="/dashboard/super/article/{{ $article->slug }}">Lihat</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            @if ($categoryy)
                <div class="alert alert-primary alert-dismissible fade show rounded-0" role="alert">
                    Artikel Masih Kosong! <a href="/dashboard/super/article/create" class="alert-link">Buat Artikel</a>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @else
            <div class="alert alert-danger alert-dismissible fade show rounded-0" role="alert">
                Isi Kategori Dahulu! <a href="/dashboard/super/category/create" class="alert-link">Tambah kategori</a>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        @endif
    </div>
@endsection
