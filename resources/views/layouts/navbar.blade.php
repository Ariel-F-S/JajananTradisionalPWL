<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            🍡 JajanNusantara
        </a>
        <button class="navbar-toggler bg-light" type="button"
            data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                <a class="nav-link" href="{{ route('jajanan.index') }}">Katalog</a>
                <a class="nav-link" href="{{ route('kontak') }}">Kontak</a>
            </div>
        </div>
    </div>
</nav>