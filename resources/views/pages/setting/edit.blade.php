@extends('layouts.app')

@section('content')
<div class="mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item"><a href="/setting">Setting</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>
</div>
<div class="card">
    <div class="card-body">
        <div class="d-flex align-content-center justify-content-between">
            <h4>Ubah Setting</h4>
            <a href="{{url(session('links')[1])}}" class="btn btn-warning">
                <span data-feather="arrow-left"></span> Kembali
            </a>
        </div>
        <form method="POST" class="" action="/setting/{{$data->id}}">
            @method('PUT')
            @csrf
            <div class="mb-3">
    <label for="inputNama_aplikasi" class="form-label">Nama_aplikasi</label>
    <input type="text" name="nama_aplikasi" value="{{$data->nama_aplikasi}}"
        class="form-control @error('nama_aplikasi') is-invalid @enderror" id="inputnama_aplikasi"
        aria-describedby="nama_aplikasiHelp">
    @error('nama_aplikasi')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="mb-3">
    <label for="inputNo_wa" class="form-label">No_wa</label>
    <input type="text" name="no_wa" value="{{$data->no_wa}}"
        class="form-control @error('no_wa') is-invalid @enderror" id="inputno_wa"
        aria-describedby="no_waHelp">
    @error('no_wa')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="mb-3">
    <label for="inputAlamat" class="form-label">Alamat</label>
    <input type="text" name="alamat" value="{{$data->alamat}}"
        class="form-control @error('alamat') is-invalid @enderror" id="inputalamat"
        aria-describedby="alamatHelp">
    @error('alamat')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>


            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
    </div>
  </div>
@endsection
