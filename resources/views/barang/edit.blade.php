@extends('layouts.app')
@section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('employees.update', ['employee' => $employee->id]) }}" method="POST">
            @csrf
            @method('put')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Edit Barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kode_barang" class="formlabel">Kode Barang</label>
                            <input class="form-control @error('kode_barang') is-invalid @enderror" type="text" name="kode_barang" id="kode_barang"
                            value="{{ $errors->any() ? old('kode_barang') : $barang->kode_barang }}" placeholder="Enter Kode Barang">
                            @error('kode_barang')
                <div class="textdanger"><small>{{ $message }}</small></div>
                @enderror
                </div>

                <div class="col-md-6 mb-3">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input class="form-control @error('nama_barang')is-invalid @enderror" type="text" name="nama_barang" id="nama_barang"
                value="{{ $errors->any() ? old('nama_barang') : $employee->lastname }}" placeholder="Enter Nama Barang">
                @error('nama_barang')
                <div class="textdanger"><small>{{ $message }}</small></div>
                @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="harga_barang" class="formlabel">Harga Barang</label>
                    <input class="form-control @error('harga_barang')is-invalid @enderror" type="text" name="harga_barang" id="harga_barang"
                    value="{{ $errors->any() ? old('harga_barang') : $employee->email }}" placeholder="Enter Harga Barang">
                @error('harga_barang')
                <div class="textdanger"><small>{{ $message }}</small></div>
                @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="deskripsi_barang" class="formlabel">Age</label>
                    <input class="form-control @error('deskripsi_barang') isinvalid @enderror" type="text" name="deskripsi_barang" id="deskripsi_barang"
                    value="{{ $errors->any() ? old('deskripsi_barang') : $employee->age }}" placeholder="Enter Deskripsi Barang">
                @error('deskripsi_barang')
                <div class="textdanger"><small>{{ $message }}</small></div>
                @enderror
                </div>

                <div class="col-md-12 mb-3">
                    <label for="kode_satuan" class="formlabel">Position</label>
                    <select name="kode_satuan" id="kode_satuan" class="form-select">
                        @php
                        $selected = "";
                        if ($errors->any())
                        $selected = old('kode_satuan');
                        else
                        $selected = $barang->kode_satuan;
                        @endphp
                        @foreach ($B as $satuan)
                        <option value="{{ $satuan->id }}" {{ $selected == $satuan->id ? 'selected' : '' }}>{{ $satuan }}</option>
                        @endforeach
                    </select>
                @error('satuan')
                <div class="textdanger"><small>{{ $message }}</small></div>
                @enderror
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-md-6 d-grid">
                <a href="{{ route('A.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circleme-2"></i>Cancel</a>
                </div>

                <div class="col-md-6 d-grid">
                    <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>Edit</button>
                </div>
            </div>
            </div>
            </div>
        </form>
    </div>
@endsection
