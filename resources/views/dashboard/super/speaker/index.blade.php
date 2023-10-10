@php
    use Illuminate\Support\Facades\Crypt;
@endphp
@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <h1 class="fw-semibold mb-3">Pemateri <i class="fa-regular fa-address-card text-primary"></i></h1>
        <a href="/dashboard/super/speaker/create" class="btn btn-primary rounded-0 mb-3">Tambah Pemateri</a>

        @if ($speakers->count())
            <div class="table-responsive">
                <table class="table table-striped align-middle">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($speakers as $speaker)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td><img src="{{ asset('storage/' . $speaker->photo) }}" width="150px" class="rounded"
                                        alt=""></td>
                                <td>{{ $speaker->user->name }}</td>
                                <td>
                                    <a class="btn btn-outline-primary rounded-0"
                                        href="/dashboard/super/speaker/{{ Crypt::encrypt($speaker->id) }}">Lihat</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-primary alert-dismissible fade show rounded-0" role="alert">
                Pemateri Masih Kosong! <a href="/dashboard/super/speaker/create" class="alert-link">Tambah Pemateri</a>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
@endsection
