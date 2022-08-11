@extends('layouts.main')

@section('container')

<div class="container my-3">
  <article>
    <h1>About Web</h1>
    <p>
      Pelayanan Pengaduan Masyarakat berbasis web yang bertujuan untuk memudahkan masyarakat 
      dalam menyalurkan aspirasinya sehingga bisa diterima dan diolah langsung oleh pemerintah setempat.
    </p>
    <h1>About Creator</h1>
    <p>
      Hi, saya adalah web developer yang berdomisisli di Jakarta.
      Saat ini sedang belajar Laravel.
      <br>
      Saya memang masih baru dalam web development, karena itu
      saya tidak akan pernah berhenti belajar.
      <br>
      Saya ingin menguasai Laravel, Javascript, dan lain-lain.
    </p>

    <hr>

    <h1>Galeri Kegiatan</h1>
    {{-- Card Group 1 --}}
    <div class="row justify-content-center mt-3">

      <div class="card col-md-6 border-success p-0 mx-2 mb-3 shadow-sm" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://kominfo.malangkota.go.id/wp-content/uploads/2021/03/web-Peningkatan-kapasitas.jpg" class="img-fluid rounded-start" alt="Keamanan">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Keamanan</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="card col-md-6 border-success p-0 mx-2 mb-3 shadow-sm" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://t-2.tstatic.net/medan/foto/bank/images/pembersihan-lapangan-merdeka_20171015_191140.jpg" class="img-fluid rounded-start" alt="Kebersihan">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Kebersihan</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    
      <div class="card col-md-6 border-success p-0 mx-2 mb-3 shadow-sm" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://tanjak2.tanjungpinangkota.go.id/asset/image/covid/umum/small_cc6fdaf6-861f-4344-84b3-93e4ebb6a4b9.jpg" class="img-fluid rounded-start" alt="Kesehatan">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Kesehatan</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>

      {{-- <div class="card col-md-6 border-success p-0 mx-2 mb-3 shadow-sm" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://asset.kompas.com/crops/s_w0LX1zzjsxbDHUws6px0PyWzg=/0x197:1000x863/750x500/data/photo/2019/01/28/3012454705.jpg" class="img-fluid rounded-start" alt="Bencana">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Bencana</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
  </article>

</div>

<hr>

<footer style="text-align: center;">
  <p>Copyright &copy; 2022 Sahal Fajri.</p>
</footer>
    
@endsection