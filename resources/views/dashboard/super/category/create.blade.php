@extends('dashboard.layouts.mainNoHeader')

@section('container')
    <div class="container">
        <h1 class="fw-semibold mb-3">Tambah Kategori <i class="fa-solid fa-filter text-primary"></i></h1>
        <form action="/dashboard/super/category" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Nama Kategori</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control rounded-0 @error('name') is-invalid @enderror" name="name"
                        id="name">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-primary mb-3">Kirim</button>
        </form>
    </div>
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#photo');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
