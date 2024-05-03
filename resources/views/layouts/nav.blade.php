@php
    $currentRouteName = Route::currentRouteName();
@endphp
<nav class="navbar navbar-expand-md navbar-dark bg-success">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i>Master Barang</a>
        <button type="button" class="navbar-toggler" data-bstoggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">
            <ul class="navbar-nav flex-row flex-wrap">
                {{-- <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link
                    @if ($currentRouteName == 'home') active @endif">Home</a></li> --}}
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('profile') }}" class="nav-link
                    @if ($currentRouteName == 'A.index') active @endif">Profile</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<nav class="navbar fixed-bottom navbar-dark bg-success">
    <div class="container-fluid">
        <a class="navbar-brand text-success" href="#">.</a>
    </div>
</nav>
