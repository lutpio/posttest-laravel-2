@extends('layouts.main')

@section('container')
    <div class="container mb-5">
        <div>
            <h3><i class="fa-solid fa-swatchbook text-primary"></i> Daftar Artikel</h3>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card h-100 card-course rounded-0 border-primary">
                    <img src="/img/article_dict_py.png" class="card-img rounded-0" alt="...">
                    <div class="card-body">
                        <span class="text-primary fw-light">python</span>
                        <div class="fw-semibold mb-3">Tutorial Python Dictionary</div>
                        <div class="text-center">
                            <button class="btn btn-outline-primary rounded-0">Lihat Selengkapnya</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 card-course rounded-0 border-primary">
                    <img src="/img/article_list_py.png" class="card-img rounded-0" alt="...">
                    <div class="card-body">
                        <span class="text-primary fw-light">python</span>
                        <div class="fw-semibold mb-3">Tutorial Python List</div>
                        <div class="text-center">
                            <button class="btn btn-outline-primary rounded-0">Lihat Selengkapnya</button>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
