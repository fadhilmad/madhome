@extends('layouts.app')

@section('content')
<div class="mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item"><a href="/profil">Profil</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>
</div>
<div class="card">
    <div class="card-body">
        <div class="d-flex align-content-center justify-content-between">
            <h4>Ubah Profil</h4>
            <a href="{{url(session('links')[1])}}" class="btn btn-warning">
                <span data-feather="arrow-left"></span> Kembali
            </a>
        </div>
        <form method="POST" class="" action="/profil/{{$data->id}}">
            @method('PUT')
            @csrf
            <div class="mb-3">
    <label for="inputNama" class="form-label">Nama</label>
    <input type="text" name="nama" value="{{$data->nama}}"
        class="form-control @error('nama') is-invalid @enderror" id="inputnama"
        aria-describedby="namaHelp">
    @error('nama')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="mb-3">
    <label for="inputProfesi" class="form-label">Profesi</label>
    <input type="text" name="profesi" value="{{$data->profesi}}"
        class="form-control @error('profesi') is-invalid @enderror" id="inputprofesi"
        aria-describedby="profesiHelp">
    @error('profesi')
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
