@extends('layouts.main')

@section('container')
    <div class="container my-5">
        <div class="wrapper-top row g-5 py-5">
            <div class="col-md d-flex flex-column">

                <h3 class="fst-italic text-primary mb-auto align-items-start">KelasPro</h3>
                <div class="mb-4">
                    <h1 class="mb-0">BELAJAR CODING.</h1>
                    <h1>BELAJAR MENJADI LEBIH KREATIF.</h1>
                    <p class="lead text-body-secondary">Menawarkan lingkungan pemograman yang mempermudah Anda memulai.</p>
                </div>
                <div>
                    <button class="btn btn-primary rounded-0 py-2 px-3 {{ Auth::check() ? 'disabled' : '' }}"
                        data-bs-target="#register" data-bs-toggle="modal">Daftar</button>
                </div>
            </div>
            <div class="col-md">
                <img src="/img/beautiful-young-woman-home-office-working-from-home-teleworking-concept.jpg"
                    class="img-fluid rounded-2" alt="">
            </div>
        </div>
    </div>

    <div class="wrapper-second bg-dark text-center p-5">
        <p class="lead text-primary ">Kenapa Memilih KelasPro?</p>
        <h3 class="text-light fw-light fst-italic">"Terjangkau dan dapat dicicil,</h3>
        <h3 class="text-light fw-light fst-italic">Bisa belajar dari 0 tanpa pengalaman coding"</h3>
    </div>

    <div class="container my-5 ">
        <div class="wrapper-third row g-5 py-5 align-items-center">
            <div class="col-md">
                <h3>Kelas Terbaru Kami</h3>
                <p class="lead text-body-secondary">Cari tau dari mana anda mau memulai!</p>
            </div>
            <div class="col-md">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    @if ($courses->count())
                        @foreach ($courses as $course)
                            <div class="col">
                                <div class="card card-course rounded-0 border-primary h-100">
                                    <img src="{{ asset('storage/' . $course->image) }}" class="card-img rounded-0"
                                        alt="...">
                                    <div class="card-body text-center">
                                        <div class="fw-semibold mb-3">{{ mb_strimwidth($course->title, 0, 58, '...') }}
                                        </div>
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
                        @else
                        <div class="card rounded-0 p-3 text-center">
                            <h1>kelas sedang kosong</h1>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>

    <div class="wrapper-end text-center p-5 my-5 ">
        <h3>Apakah anda siap untuk menjadi programer yang handal?</h3>
        <p class="mb-5">Ayo belajar coding, ayo belajar menjadi lebih kreatif!</p>
        <button class="btn btn-primary rounded-0 py-2 px-3 {{ Auth::check() ? 'disabled' : '' }}" data-bs-target="#login"
            data-bs-toggle="modal">Mulai
            Belajar</button>
    </div>
@endsection
