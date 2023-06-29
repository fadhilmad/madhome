@extends('layouts.app')

@section('content')
<div class="mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/portofolio">Portofolio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add</li>
        </ol>
    </nav>
</div>
<div class="card">
    <div class="card-body">
        <div class="d-flex align-content-center justify-content-between">
            <h4>Tambah Portofolio</h4>
            <a href="{{url(session('links')[1])}}" class="btn btn-warning">
                <span data-feather="arrow-left"></span> Kembali
            </a>
        </div>
        <form method="POST" class="" action="/portofolio" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
    <label for="inputTitle" class="form-label">Title</label>
    <input type="text" name="title" value="{{old('title')}}"
        class="form-control @error('title') is-invalid @enderror" id="inputtitle"
        aria-describedby="titleHelp">
    @error('title')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="mb-3">
    <label for="inputGambar" class="form-label">Gambar</label>
    <input type="text" name="gambar" value="{{old('gambar')}}"
        class="form-control @error('gambar') is-invalid @enderror" id="inputgambar"
        aria-describedby="gambarHelp">
    @error('gambar')
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
