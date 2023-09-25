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
                    <a class="nav-link {{ Request::is('/') ? 'active' :'' }}" href="/">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('kelas*') ? 'active' :'' }}" href="/kelas">KELAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('artikel*') ? 'active' :'' }}" href="/artikel">ARTIKEL</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
