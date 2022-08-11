@extends('layouts.main')

@section('container')

{{-- form aspirasi --}}
<div class="container my-4 d-flex justify-content-start">
  <div class="col">
    <a href="/aspirasis" class="btn btn-danger shadow"><i class="bi bi-arrow-left-square"></i> Kembali</a>
  </div>
  <div class="col-lg-10">
    <h1>Detail Aspirasi</h1>
    <div class="card shadow">
      <div class="card-header">
        <strong>Id Pelaporan : {{ $aspirasi->id }}</strong>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">NIK : {{ $aspirasi->nik }}</li>
        <li class="list-group-item">Kategori : {{ $aspirasi->category->ket_kategori }}</li>
        <li class="list-group-item">Lokasi : {{ $aspirasi->lokasi }}</li>
        <li class="list-group-item">Status : {{ $aspirasi->status }}</li>
      </ul>    
      <div class="card-body">
        Keterangan :
        <p>{{ $aspirasi->ket }}</p>
        Feedback :
        <p>{{ $aspirasi->feedback }}</p>
      </div>
    </div>
  </div>
</div>

@endsection