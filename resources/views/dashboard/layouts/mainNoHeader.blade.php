<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KelasPro | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    {{-- font --}}

    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/bd49e73b8b.js" crossorigin="anonymous"></script>
    {{-- fontawesome --}}

    {{-- sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    {{-- sweetalert --}}

    {{-- jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    {{-- jquery --}}

    {{-- trix --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    {{-- trix --}}

    <style>
        trix-toolbar [ data-trix-button-group="file-tools"] {
            display: none;
        }

        trix-toolbar [ data-trix-attribute="code"] {
            display: none;
        }
    </style>
</head>

<body>
    @if (session()->has('error'))
        <script>
            Swal.fire({
                title: "{{ session('error') }}",
                icon: 'error',
                showConfirmButton: false,
                timer: 2000
            })
        </script>
    @elseif(session()->has('success'))
        <script>
            Swal.fire({
                title: "{{ session('success') }}",
                icon: 'success',
                showConfirmButton: false,
                timer: 2000
            })
        </script>
    @endif

    <nav class="navbar navbar-expand-lg bg-white shadow sticky-top ">
        <div class="container-fluid">
            <a class="navbar-brand text-secondary fw-semibold  px-2 rounded-1"
                href="{{ $hrefReturn }}"><i class="fa-solid fa-arrow-left me-2"></i>{{ $title }}</a>
            
        </div>
    </nav>
    <main class="mt-4">
        @yield('container')

    </main>
    <div class="modal fade" id="logoutmodal" tabindex="-1" aria-labelledby="logoutmodallabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="logoutmodallabel">Logout</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Yakin Logout <i class="fa-solid fa-question fa-fade text-primary"></i>
                </div>
                <div class="modal-footer">
                    <button type="button" class="rounded-0 btn btn-secondary" data-bs-dismiss="modal">Tidak</button>

                    <form action="/logout" method="post" id="logout">
                        @csrf
                        <button type="submit" class="rounded-0 btn btn-primary">
                            Logout</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>
