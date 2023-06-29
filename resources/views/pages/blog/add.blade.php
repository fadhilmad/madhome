@extends('layouts.app')

@section('content')
<div class="mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add</li>
        </ol>
    </nav>
</div>
<div class="card">
    <div class="card-body">
        <div class="d-flex align-content-center justify-content-between">
            <h4>Tambah Blog</h4>
            <a href="{{url(session('links')[1])}}" class="btn btn-warning">
                <span data-feather="arrow-left"></span> Kembali
            </a>
        </div>
        <form method="POST" class="" action="/blog" enctype="multipart/form-data">
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
    <label for="inputDeskripsi" class="form-label">Deskripsi</label>
    <input type="text" name="deskripsi" value="{{old('deskripsi')}}"
        class="form-control @error('deskripsi') is-invalid @enderror" id="inputdeskripsi"
        aria-describedby="deskripsiHelp">
    @error('deskripsi')
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
