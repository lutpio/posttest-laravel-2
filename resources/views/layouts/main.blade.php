<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KelasPro</title>
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
    @include('layouts.partials.navbar')
    <main class="mt-4">
        @yield('container')

    </main>
    @include('layouts.partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
