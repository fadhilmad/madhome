@extends('layout.main')
@section('css')
    <style>

    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Perpanjang</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Tambah Perpanjang</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-primary">
        <div class="card-body">
            <h4 class="card-title text-primary mb-4">Tambah Perpanjang</h4>
            <form action="{{ route('perpanjang.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="projek_id" class="form-label">Projek Id</label>
                            <select class="form-select" name="projek_id" id="projek_id">
                                <option value="">-- Pilih Projek Id --</option>
                                @foreach ($projek as $val)
                                    <option value="{{ $val->id }}"
                                        {{ old('projek_id') == $val->id ? 'selected' : '' }}>
                                        {{ $val->nama }}</option>
                                @endforeach
                            </select>
                            @error('projek_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="harga" class="form-label">Harga</label>
                            <input class="form-control" type="text" name="harga" id="harga"
                                value="{{ old('harga') }}">
                            @error('harga')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="tanggal_start" class="form-label">Tanggal Start</label>
                            <input class="form-control" type="date" name="tanggal_start" id="tanggal_start"
                                value="{{ old('tanggal_start') }}">
                            @error('tanggal_start')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="tangal_ahir" class="form-label">Tangal Ahir</label>
                            <input class="form-control" type="date" name="tangal_ahir" id="tangal_ahir"
                                value="{{ old('tangal_ahir') }}">
                            @error('tangal_ahir')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="type_perpanjang" class="form-label">Type Perpanjang</label>
                            <input class="form-control" type="text" name="type_perpanjang" id="type_perpanjang"
                                value="{{ old('type_perpanjang') }}">
                            @error('type_perpanjang')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="button-navigate mt-3">
                    <a href="{{ route('perpanjang.index') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left me-1"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save me-1"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script></script>
@endsection
