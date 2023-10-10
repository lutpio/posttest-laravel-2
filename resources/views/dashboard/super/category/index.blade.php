@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <h1 class="fw-semibold mb-3">Kategori <i class="fa-solid fa-filter text-primary"></i></h1>
        <a href="/dashboard/super/category/create" class="btn btn-primary rounded-0 mb-3">Buat Kategori</a>

        @if ($categories->count())
            <div class="table-responsive">
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>                        
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $category->name }}</td>                                
                                <td>
                                    <a class="btn btn-outline-primary rounded-0"
                                        href="/dashboard/super/category/{{ Crypt::encrypt($category->id) }}">Lihat</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-primary alert-dismissible fade show rounded-0" role="alert">
                Kategori Masih Kosong! <a href="/dashboard/super/category/create" class="alert-link">Buat Kategori</a>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
@endsection
