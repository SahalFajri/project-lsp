@extends('layouts.main')

@section('container')

<div class="container my-4 d-flex justify-content-start">
  <div class="col">
    <a href="/home" class="btn btn-danger shadow"><i class="bi bi-arrow-left-square"></i> Kembali</a>
  </div>
  <div class="col-lg-10">
    <h1>Histori Aspirasi</h1>
    <div class="card shadow">
      <div class="card-body">
        <form class="d-flex mb-3" role="search">
          <input name="search" class="form-control me-2 shadow-sm" type="search" placeholder="Cari berdasarkan id" aria-label="Search">
          <button class="btn btn-outline-success shadow-sm col-lg-1" type="submit"><i class="bi bi-search"></i> Cari</button>
        </form>

        <table class="table table-bordered border-dark table-striped">
          <thead class="table-dark">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">NIK</th>
              <th scope="col">Kategori</th>
              <th scope="col">Status</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @if($aspirasis->count())
            @foreach($aspirasis as $aspirasi)
            <tr>
              <th scope="row">{{ $aspirasi->id }}</th>
              <td>{{ $aspirasi->nik }}</td>
              <td>{{ $aspirasi->category->ket_kategori }}</td>
              <td>{{ $aspirasi->status }}</td>
              <td><a href="/aspirasis/{{ $aspirasi->id }}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a></td>
            </tr>
            @endforeach
            @else
            <tr>
              <td colspan="5"><p class="text-center fs-4">Aspirasi tidak ditemukan.</p></td>
            </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>
    
    {{-- Pagination --}}
    <div class="d-flex justify-content-center mt-3">
      {{ $aspirasis->links() }}
    </div>
  </div>
</div>

@endsection