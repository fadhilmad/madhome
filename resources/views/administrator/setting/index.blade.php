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
                        <li class="breadcrumb-item active">Setting</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-primary">
        <div class="card-body">
            <div class="row justify-content-between align-items-center mb-4">
                <div class="col-auto">
                    <h4 class="card-title text-primary">Data Setting</h4>
                </div>
                <div class="col-auto">
                    <a href="{{ route('setting.edit') }}" class="btn btn-primary">
                        <i class="fa fa-edit me-2"></i> Edit
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="row mx-0">
                        <label for="logo" class="col-auto col-form-label">
                            <i class="fa fa-arrow-right me-1"></i> Logo
                        </label>
                        <div class="col">
                            <a class="btn btn-sm btn-info {{ $setting->logo ? '' : 'disabled' }}" target="_blank"
                                href="{{ asset('uploads/setting_logo') }}/{{ $setting->logo }}">
                                <i class="fa fa-download me-1"></i> File
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="row mx-0">
                        <label for="favicon" class="col-auto col-form-label">
                            <i class="fa fa-arrow-right me-1"></i> Favicon
                        </label>
                        <div class="col">
                            <a class="btn btn-sm btn-info {{ $setting->favicon ? '' : 'disabled' }}" target="_blank"
                                href="{{ asset('uploads/setting_favicon') }}/{{ $setting->favicon }}">
                                <i class="fa fa-download me-1"></i> File
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="row mx-0">
                        <label for="nama_instansi" class="col-auto col-form-label">
                            <i class="fa fa-arrow-right me-1"></i> Nama Instansi
                        </label>
                        <div class="col">
                            <input type="text" readonly class="form-control-plaintext" id="nama_instansi"
                                value="{{ $setting->nama_instansi }}">
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="row mx-0">
                        <label for="link_fb" class="col-auto col-form-label">
                            <i class="fa fa-arrow-right me-1"></i> Link Fb
                        </label>
                        <div class="col">
                            <input type="text" readonly class="form-control-plaintext" id="link_fb"
                                value="{{ $setting->link_fb }}">
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="row mx-0">
                        <label for="link_ig" class="col-auto col-form-label">
                            <i class="fa fa-arrow-right me-1"></i> Link Ig
                        </label>
                        <div class="col">
                            <input type="text" readonly class="form-control-plaintext" id="link_ig"
                                value="{{ $setting->link_ig }}">
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="row mx-0">
                        <label for="link_tiktok" class="col-auto col-form-label">
                            <i class="fa fa-arrow-right me-1"></i> Link Tiktok
                        </label>
                        <div class="col">
                            <input type="text" readonly class="form-control-plaintext" id="link_tiktok"
                                value="{{ $setting->link_tiktok }}">
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="row mx-0">
                        <label for="deskripsi" class="col-auto col-form-label">
                            <i class="fa fa-arrow-right me-1"></i> Deskripsi
                        </label>
                        <div class="col">
                            <input type="text" readonly class="form-control-plaintext" id="deskripsi"
                                value="{{ $setting->deskripsi }}">
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="row mx-0">
                        <label for="map" class="col-auto col-form-label">
                            <i class="fa fa-arrow-right me-1"></i> Map
                        </label>
                        <div class="col">
                            <input type="text" readonly class="form-control-plaintext" id="map"
                                value="{{ $setting->map }}">
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="row mx-0">
                        <label for="alamat" class="col-auto col-form-label">
                            <i class="fa fa-arrow-right me-1"></i> Alamat
                        </label>
                        <div class="col">
                            <input type="text" readonly class="form-control-plaintext" id="alamat"
                                value="{{ $setting->alamat }}">
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="row mx-0">
                        <label for="no_wa" class="col-auto col-form-label">
                            <i class="fa fa-arrow-right me-1"></i> No Wa
                        </label>
                        <div class="col">
                            <input type="text" readonly class="form-control-plaintext" id="no_wa"
                                value="{{ $setting->no_wa }}">
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="row mx-0">
                        <label for="email" class="col-auto col-form-label">
                            <i class="fa fa-arrow-right me-1"></i> Email
                        </label>
                        <div class="col">
                            <input type="text" readonly class="form-control-plaintext" id="email"
                                value="{{ $setting->email }}">
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="row mx-0">
                        <label for="analytic" class="col-auto col-form-label">
                            <i class="fa fa-arrow-right me-1"></i> Analytic
                        </label>
                        <div class="col">
                            <input type="text" readonly class="form-control-plaintext" id="analytic"
                                value="{{ $setting->analytic }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    @if (session()->has('dataSaved') && session()->get('dataSaved') == true)
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session()->get('message') }}',
            });
        </script>
    @endif
    @if (session()->has('dataSaved') && session()->get('dataSaved') == false)
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ session()->get('message') }}',
            });
        </script>
    @endif
@endsection
