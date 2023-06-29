@extends('layouts.app')

@section('content')
<div class="mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="/portofolio">Portofolio</a></li>
          <li class="breadcrumb-item active" aria-current="page">Show</li>
        </ol>
    </nav>
</div>
<div class="card">
    <div class="card-body">
        <div class="d-flex align-content-center justify-content-between">
            <h4>Detail Portofolio</h4>
            <a href="{{url(session('links')[1])}}" class="btn btn-warning">
                <span data-feather="arrow-left"></span> Kembali
            </a>
        </div>
        <table class="table">
            <tr>
    <th>Title</th>
    <td>{{$data->title}}</td>
</tr>

<tr>
    <th>Gambar</th>
    <td>{{$data->gambar}}</td>
</tr>


        </table>
    </div>
  </div>
@endsection
