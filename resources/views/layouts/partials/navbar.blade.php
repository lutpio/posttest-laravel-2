<nav class="navbar navbar-expand-lg bg-white shadow sticky-top ">
    <div class="container">
        <a class="navbar-brand text-primary fw-semibold fst-italic" href="/">KelasPro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('kelas*') ? 'active' : '' }}" href="/kelas">KELAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('artikel*') ? 'active' : '' }}" href="/artikel">ARTIKEL</a>
                </li>
            </ul>

            <button class="btn btn-outline-primary rounded-0 " data-bs-target="#login"
                data-bs-toggle="modal">Login</button>

        </div>
    </div>
</nav>
{{-- modal --}}
<div class="modal fade" id="login" aria-hidden="true" aria-labelledby="loginLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="loginLabel">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="d-flex justify-content-between align-items-center">

                        <span>Belum punya akun? <a href="#register" data-bs-target="#register"
                                data-bs-toggle="modal">Daftar</a></span>
                        <button type="submit" class="btn btn-primary rounded-0">Submit</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="register" aria-hidden="true" aria-labelledby="registerLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="registerLabel">Register</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="d-flex justify-content-between align-items-center">

                        <span>Sudah punya akun? <a href="#login" data-bs-target="#login"
                                data-bs-toggle="modal">Login</a></span>
                        <button type="submit" class="btn btn-primary rounded-0">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
{{-- <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Open first modal</button> --}}
{{-- modal --}}
