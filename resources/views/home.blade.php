<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i>Master Barang</a>
            <button type="button" class="navbar-toggler" data-bstoggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('profile') }}" class="nav-link active">Profile</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('A.index') }}" class="nav-link">Daftar Barang</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container text-center mt-4">
        <h4>{{ $pageTitle }}</h4>
        <hr>
        <img class="img-thumbnail" src="{{ Vite::asset('resources/images/hype.gif') }}" alt="image">
    </div>
    @vite('resources/js/app.js')
</body>

<nav class="navbar fixed-bottom navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-dark" href="#">.</a>
    </div>
</nav>

</html>
