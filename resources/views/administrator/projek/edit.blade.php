@extends('layout.main')
@section('css')
    <style>

    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Projek</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Projek</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-primary">
        <div class="card-body">
            <h4 class="card-title text-primary mb-4">Edit Projek</h4>
            <form action="{{ route('projek.update', $projek->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xl-4">
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama"
                                value="{{ old('nama') ? old('nama') : $projek->nama }}">
                            @error('nama')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="form-group">
                            <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
                            <input class="form-control" type="date" name="tanggal_masuk" id="tanggal_masuk"
                                value="{{ old('tanggal_masuk') ? old('tanggal_masuk') : $projek->tanggal_masuk }}">
                            @error('tanggal_masuk')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="form-group">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input class="form-control" type="file" name="gambar" id="gambar">
                            @error('gambar')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label for="link" class="form-label">Link</label>
                            <textarea class="form-control" name="link" id="link" rows="3">{{ old('link') ? old('link') : $projek->link }}</textarea>
                            @error('link')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label for="type_projek_id" class="form-label">Type Projek Id</label>
                            <select class="form-select" name="type_projek_id" id="type_projek_id">
                                <option value="">-- Pilih Type Projek Id --</option>
                                @foreach ($type_projek as $val)
                                    <option value="{{ $val->id }}"
                                        {{ old('type_projek_id') == $val->id ? 'selected' : ($projek->type_projek_id == $val->id ? 'selected' : '') }}>
                                        {{ $val->nama }}</option>
                                @endforeach
                            </select>
                            @error('type_projek_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label for="status_projek_id" class="form-label">Status Projek Id</label>
                            <select class="form-select" name="status_projek_id" id="status_projek_id">
                                <option value="">-- Pilih Status Projek Id --</option>
                                @foreach ($status_projek as $val)
                                    <option value="{{ $val->id }}"
                                        {{ old('status_projek_id') == $val->id ? 'selected' : ($projek->status_projek_id == $val->id ? 'selected' : '') }}>
                                        {{ $val->nama }}</option>
                                @endforeach
                            </select>
                            @error('status_projek_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="button-navigate mt-3">
                    <a href="{{ route('projek.index') }}" class="btn btn-secondary">
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
