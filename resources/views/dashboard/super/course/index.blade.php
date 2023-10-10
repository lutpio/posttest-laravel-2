@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <h1 class="fw-semibold mb-3">Kelas <i class="fa-solid fa-laptop-code text-primary"></i></h1>
        @if ($speakerr)
            <a href="/dashboard/super/courses/create" class="btn btn-primary rounded-0 mb-3">Buat Kelas</a>
        @else
            <a href="/dashboard/super/courses/create" class="btn btn-primary disabled rounded-0 mb-3">Buat Kelas</a>
        @endif

        @if ($courses->count())
            <div class="table-responsive">
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Pemateri</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $course->title }}</td>
                                <td>{{ $course->speaker->user->name }}</td>
                                <td>
                                    <a class="btn btn-outline-primary rounded-0"
                                        href="/dashboard/super/courses/{{ $course->slug }}">Lihat</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            @if ($speakerr)
                <div class="alert alert-primary alert-dismissible fade show rounded-0" role="alert">
                    Kelas Masih Kosong! <a href="/dashboard/super/courses/create" class="alert-link">Buat kelas</a>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @else
                <div class="alert alert-danger alert-dismissible fade show rounded-0" role="alert">
                    Isi Pemateri Dahulu! <a href="/dashboard/super/speaker/create" class="alert-link">Tambah pemateri</a>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        @endif
    </div>
@endsection
