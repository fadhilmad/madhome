@extends('layout.main')
@section('css')
    <style>

    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Tentang Kami</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Tentang Kami</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-primary">
        <div class="card-body">
            <div class="row justify-content-between align-items-center mb-4">
                <div class="col-auto">
                    <h4 class="card-title text-primary">Data Tentang Kami</h4>
                </div>
                <div class="col-auto">
                    <a href="{{ route('tentang_kami.edit') }}" class="btn btn-primary">
                        <i class="fa fa-edit me-2"></i> Edit
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="row mx-0">
                        <label for="gambar" class="col-auto col-form-label">
                            <i class="fa fa-arrow-right me-1"></i> Gambar
                        </label>
                        <div class="col">
                            <a class="btn btn-sm btn-info {{ $tentang_kami->gambar ? '' : 'disabled' }}" target="_blank"
                                href="{{ asset('uploads/tentang_kami_gambar') }}/{{ $tentang_kami->gambar }}">
                                <i class="fa fa-download me-1"></i> File
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row mx-0">
                        <label for="deskripsi" class="col-auto col-form-label">
                            <i class="fa fa-arrow-right me-1"></i> Deskripsi
                        </label>
                        <div class="col">
                            <input type="text" readonly class="form-control-plaintext" id="deskripsi"
                                value="{{ $tentang_kami->deskripsi }}">
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
