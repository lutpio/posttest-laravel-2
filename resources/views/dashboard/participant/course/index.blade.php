@extends('dashboard.layouts.main')

@section('container')
    <div class="container mb-5">
        <div>
            <h3><i class="fa-solid fa-swatchbook text-primary"></i> Daftar Kelas</h3>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($courses as $course)
                <div class="col">
                    <div class="card card-course rounded-0 border-primary h-100">
                        <img src="{{ asset('storage/' . $course->image) }}" class="card-img rounded-0" alt="...">
                        <div class="card-body text-center">
                            <div class="fw-semibold mb-3">{{ mb_strimwidth($course->title, 0, 58, '...') }}</div>
                            @auth
                                <a href="/dashboard/participant/courses/{{ $course->slug }}"
                                    class="btn btn-primary rounded-0">Lihat Selengkapnya</a>
                            @endauth
                            @guest
                                <button data-bs-target="#login" data-bs-toggle="modal"
                                    class="btn btn-outline-primary rounded-0">Lihat Selengkapnya</button>
                            @endguest
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
