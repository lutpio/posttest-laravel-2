@extends('dashboard.layouts.mainNoHeader')

@section('container')
    <div class="container">
        <h1 class="fw-semibold mb-3">Buat Artikel <i class="fa-solid fa-newspaper text-primary"></i></h1>
        <form action="/dashboard/super/article" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control rounded-0 @error('title') is-invalid @enderror" name="title"
                        id="title">
                    <input type="hidden" class="form-control rounded-0 @error('slug') is-invalid @enderror" name="slug"
                        id="slug">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="category_id" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                    <select class="form-select" name="category_id">
                        @foreach ($categories as $category)
                            @if (old('category_id') == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                    <img class="img-preview img-fluid mb-3 col-sm-5">

                    <input type="file" class="form-control rounded-0 @error('image') is-invalid @enderror" name="image"
                        id="image" onchange="previewImage()">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="body" class="col-sm-2 col-form-label">Content</label>
                <div class="col-sm-10">
                    <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                    <trix-editor input="body" class="@error('body')border-danger @enderror"></trix-editor>
                    @error('body')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-primary mb-3">Kirim</button>
        </form>
    </div>
    <script>
        const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#image');
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
