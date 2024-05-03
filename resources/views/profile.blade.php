<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
    <style>
        table,
        th,
        td {
            border: 1px solid;
        }

        table {
            width: 100%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-danger">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data
                Master</a>
            <button type="button" class="navbar-toggler" data-bstoggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-6 col-md-auto"><a href="{{ route('A.index') }}" class="nav-link">Daftar
                            Barang</a></li>
                </ul>
                <hr class="d-lg-none text-white-50">
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <h4 class="text-center">BIODATA MAHASISWA</h4>
        <hr>
        <div class="text-center">
            <h1>Neo Zulkarnain Masthur</h1>
            <h2>1204220051</h1>
                <h1>neo@student.ittelkom-sby.ac.id</h1>
                <hr>
                <h1>Sejarah Pendidikan</h1>
                <table>
                    <tr>
                        <th>No.</th>
                        <th>Nama Sekolah</th>
                        <th>Tingkat</th>
                        <th>Jangka</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Tel-U Surabaya</td>
                        <td>Mahasiswa</td>
                        <td>4 Tahun</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>SIT SMA Al-Biruni Mandiri Makassar</td>
                        <td>Sekolah Menengah Atas</td>
                        <td>3 Tahun</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>SIT SMP Al-Biruni Mandiri Makassar</td>
                        <td>Sekolah Menegah Pertama</td>
                        <td>3 Tahun</td>
                    </tr>
                </table>
                <hr>
                <h1>Minat & Hobi</h1>
                <h3>
                    Bela Diri <br>
                    Memanah <br>
                    Coding(?) <br>
                </h3>
                <hr>
        </div>
    </div>
    </div>
    @vite('resources/js/app.js')
</body>

<nav class="navbar fixed-bottom navbar-dark bg-danger">
    <div class="container-fluid">
        <a class="navbar-brand text-danger" href="#">.</a>
    </div>
</nav>

</html>
