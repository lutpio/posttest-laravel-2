@extends('dashboard.layouts.mainNoHeader')

@section('container')
    <div class="container">
        <h1 class="fw-semibold mb-3">Tambah Pemateri <i class="fa-regular fa-address-card text-primary"></i></h1>
        <form action="/dashboard/super/speaker" method="post" enctype="multipart/form-data">
            @csrf            
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Nama</label>
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
            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control rounded-0 @error('email') is-invalid @enderror" name="email"
                        id="email">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>


            <div class="row mb-3">
                <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                <div class="col-sm-10">
                    <img class="img-preview img-fluid mb-3 col-sm-5">

                    <input type="file" class="form-control rounded-0 @error('photo') is-invalid @enderror" name="photo"
                        id="photo" onchange="previewImage()">
                    @error('photo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="note" class="col-sm-2 col-form-label">Content</label>
                <div class="col-sm-10">
                    <input id="note" type="hidden" name="note" value="{{ old('note') }}">
                    <trix-editor input="note" class="@error('note')border-danger @enderror"></trix-editor>
                    @error('note')
                        <p class="text-danger">{{ $message }}</p>
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
