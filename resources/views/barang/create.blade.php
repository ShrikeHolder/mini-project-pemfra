<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i>Data Master</a>
            <button type="button" class="navbar-toggler" data-bstoggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                {{-- <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('A.index') }}" class="nav-link">Barang List</a></li>
                </ul> --}}
            </div>
        </div>
    </nav>
    <div class="container-sm mt-5">
        <form action="{{ route('A.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alertdismissible fade show">
                                {{ $error }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endforeach
                    @endif
                    <div class="mb-3 text-center">
                        <h4>Input Barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kode_barang" class="formlabel">Kode Barang</label>
                            <input class="form-control" type="text" name="kode_barang" id="kode_barang"
                            value="" placeholder="Enter Kode Barang">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input class="form-control" type="text" name="nama_barang" id="nama_barang"
                            value="" placeholder="Enter Nama Barang">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="harga_barang" class="formlabel">Harga Barang</label>
                            <input class="form-control" type="text" name="harga_barang" id="harga_barang"
                            value="" placeholder="Enter Harga Barang">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="deskripsi_barang" class="form-label">Deskripsi Barang</label>
                            <input class="form-control" type="text" name="deskripsi_barang" id="deskripsi_barang"
                            value="" placeholder="Deskripsi Barang">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="kode_satuan" class="formlabel">Satuan Barang</label>
                            <select name="kode_satuan" id="kode_satuan" class="formselect">
                                    <option value="">SAT001 - KG</option>
                                    <option value="">SAT002 - Liter</option>
                            </select>
                            @error('satuan')
                                <div class="textdanger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('A.index') }}" class="btn btn-outline-dark btn-lg mt-3">
                                <i class="bi-arrow-left-circle me-2"></i>Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @vite('resources/js/app.js')
</body>

<nav class="navbar fixed-bottom navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand text-primary" href="#">.</a>
    </div>
</nav>

</html>
