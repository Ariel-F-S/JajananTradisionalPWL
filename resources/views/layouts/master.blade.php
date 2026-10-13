
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - JajanNusantara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #fffaf2; color: #493323; }
        .navbar { background: #5b3924; }
        .navbar-brand, .nav-link { color: white !important; }
        .hero { background: #f0dfc4; border-radius: 18px; }
        .card { border: 0; border-radius: 14px; overflow: hidden; }
        .card img { height: 200px; object-fit: cover; }
        .btn-cokelat { background: #5b3924; color: white; }
        .btn-cokelat:hover { background: #795438; color: white; }
        footer { background: #5b3924; color: white; }
    </style>
</head>
<body>

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
            </div>
        </div>
    </div>
</nav>

<main class="container py-4">
    @yield('content')
</main>

<footer class="text-center py-3 mt-4">
    <small>© 2026 JajanNusantara | Mengenal Jajanan Tradisional Indonesia</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
