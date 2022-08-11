<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aspirasi Masyarakat | Home</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  </head>
  <body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-success navbar-dark shadow">
      <div class="container">
        <a class="navbar-brand" href="/">Aspirasi Masyarakat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="/home">Home</a>
            <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
          </div>
  
          <div class="navbar-nav ms-auto">
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle"></i> {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item text-danger" href="#"><i class="bi bi-door-closed"></i> Logout</button>
                  </form>
                </li>
              </ul>
            </li>
            @else
            <a href="/login">
              <img src="https://3.bp.blogspot.com/-ui52AnN4i0I/Xt3tPQwy-MI/AAAAAAAAIwo/jc2Z6UfoCcc67zPBsu3D1Vdx7doNxarKACPcBGAYYCw/s400/idn_emb_idezia.com.png" alt="" width="30" height="24">
            </a>
            @endauth
          </div>
        </div>
      </div>
    </nav>

    @yield('container')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
