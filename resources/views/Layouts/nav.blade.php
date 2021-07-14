<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('indexprovinsi') }}">Lihat Daftar Provinsi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('indexkota') }}">Lihat Daftar Kota</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('indexdesa') }}">Lists Daftar Desa</a>
        </li>
    </div>
    </nav>
    @yield('content')
</body>
</html>