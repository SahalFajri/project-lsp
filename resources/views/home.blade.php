@extends('layouts.main')

@section('container')

{{-- form aspirasi --}}
<div class="container my-4 d-flex justify-content-start">
  <div class="col">
    <a href="/aspirasis" class="btn btn-success shadow"><i class="bi bi-search"></i> Lihat Aspirasi</a>
  </div>
  <div class="col-lg-10">
    <div class="card">
      <div class="card-body shadow">
        
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {!! session('success') !!}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        
        <h1 class="text-center">Form Aspirasi</h1>
        <form method="POST" action="/home">
          @csrf
          <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input name="nik" type="number" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Harus 16 Digit" value="{{ old('nik') }}">
            @error('nik')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select name="category_id" class="form-select @error('category_id') is-invalid @enderror" aria-label="Default select example" id="kategori">
              <option selected value="">Pilih Kategori</option>
              @foreach($categories as $category)
              <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? ' selected' : ' ' }}>{{ $category->ket_kategori }}</option>
              @endforeach
            </select>
            @error('category_id')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input name="lokasi" type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" placeholder="Nama Jalan, Kecamatan, Kelurahan" value="{{ old('lokasi') }}">
            @error('lokasi')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea name="ket" class="form-control @error('ket') is-invalid @enderror" placeholder="Tulis keterangan di sini" id="keterangan">{{ old('ket') }}</textarea>
            @error('ket')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary"><i class="bi bi-send"></i> Kirim</button>
        </form>

      </div>
    </div>
  </div>
</div>

@endsection