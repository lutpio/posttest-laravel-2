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
                    <button class="btn btn-primary rounded-0 py-2 px-3">Daftar</button>
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
                    <div class="col">
                        <div class="card card-course rounded-0 border-primary h-100">
                            <img src="/img/kelas_samarinda.png" class="card-img rounded-0" alt="...">
                            <div class="card-body text-center">
                                <div class="fw-semibold mb-3">Kelas Programming Dasar di Kota Samarinda</div>
                                <button class="btn btn-outline-primary rounded-0">Lihat Selengkapnya</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-course rounded-0 border-primary h-100">
                            <img src="/img/kelas_samarinda.png" class="card-img rounded-0" alt="...">
                            <div class="card-body text-center">
                                <div class="fw-semibold mb-3">Kelas Programming Dasar di MAN 1 Samarinda</div>
                                <button class="btn btn-outline-primary rounded-0">Lihat Selengkapnya</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="wrapper-end text-center p-5 my-5 ">
        <h3>Apakah anda siap untuk menjadi programer yang handal?</h3>
        <p class="mb-5">Ayo belajar coding, ayo belajar menjadi lebih kreatif!</p>
        <button class="btn btn-primary rounded-0 py-2 px-3">Mulai Belajar</button>
    </div>
@endsection
