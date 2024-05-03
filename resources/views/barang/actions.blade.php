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
    <div class="d-flex">
        <a href="{{ route('A.show', ['barang' => $barang->id]) }}" class="btn btn-outline-dark btn-sm me-2">
            <i class="bi-person lines-fill"></i></a>
        <a href="{{ route('A.edit', ['barang' => $barang->id]) }}" class="btn btn-outline-dark btn-sm me-2">
            <i class="bi-pencil square"></i></a>
        <div>
            <form action="{{ route('A.destroy', ['barang' => $barang->id]) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
            </form>
        </div>
    </div>
</body>
