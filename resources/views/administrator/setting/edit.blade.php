@extends('layout.main')
@section('css')
    <style>

    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Setting</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Setting</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-primary">
        <div class="card-body">
            <h4 class="card-title text-primary mb-4">Edit Setting</h4>
            <form action="{{ route('setting.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label for="logo" class="form-label">Logo</label>
                            <input class="form-control" type="file" name="logo" id="logo">
                            @error('logo')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label for="favicon" class="form-label">Favicon</label>
                            <input class="form-control" type="file" name="favicon" id="favicon">
                            @error('favicon')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label for="nama_instansi" class="form-label">Nama Instansi</label>
                            <input class="form-control" type="text" name="nama_instansi" id="nama_instansi"
                                value="{{ old('nama_instansi') ? old('nama_instansi') : $setting->nama_instansi }}">
                            @error('nama_instansi')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label for="link_fb" class="form-label">Link Fb</label>
                            <input class="form-control" type="text" name="link_fb" id="link_fb"
                                value="{{ old('link_fb') ? old('link_fb') : $setting->link_fb }}">
                            @error('link_fb')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label for="link_ig" class="form-label">Link Ig</label>
                            <input class="form-control" type="text" name="link_ig" id="link_ig"
                                value="{{ old('link_ig') ? old('link_ig') : $setting->link_ig }}">
                            @error('link_ig')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label for="link_tiktok" class="form-label">Link Tiktok</label>
                            <input class="form-control" type="text" name="link_tiktok" id="link_tiktok"
                                value="{{ old('link_tiktok') ? old('link_tiktok') : $setting->link_tiktok }}">
                            @error('link_tiktok')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input class="form-control" type="text" name="deskripsi" id="deskripsi"
                                value="{{ old('deskripsi') ? old('deskripsi') : $setting->deskripsi }}">
                            @error('deskripsi')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label for="map" class="form-label">Map</label>
                            <input class="form-control" type="text" name="map" id="map"
                                value="{{ old('map') ? old('map') : $setting->map }}">
                            @error('map')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat"
                                value="{{ old('alamat') ? old('alamat') : $setting->alamat }}">
                            @error('alamat')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label for="no_wa" class="form-label">No Wa</label>
                            <input class="form-control" type="text" name="no_wa" id="no_wa"
                                value="{{ old('no_wa') ? old('no_wa') : $setting->no_wa }}">
                            @error('no_wa')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control" type="text" name="email" id="email"
                                value="{{ old('email') ? old('email') : $setting->email }}">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label for="analytic" class="form-label">Analytic</label>
                            <textarea class="form-control" name="analytic" id="analytic" rows="3">{{ old('analytic') ? old('analytic') : $setting->analytic }}</textarea>
                            @error('analytic')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="button-navigate mt-3">
                    <a href="{{ route('setting.index') }}" class="btn btn-secondary">
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
