<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{URL::asset('/images/Logo-KaylaFarma.png')}}">
    <title>Kayla Farma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top shadow">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
            <img src="{{URL::asset('/images/Logo-KaylaFarma.png')}}" alt="Bootstrap" width="50" height="50">
            Kayla Farma</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">Tentang Kami</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Layanan Kami
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/obat">Obat-obatan</a></li>
                  <li><a class="dropdown-item" href="/alkes">Alat Kesehatan</a></li>
                  <li><a class="dropdown-item" target="_blank" href="https://wa.me/081410578878">Layanan Pesan Antar</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">Kontak Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/gallery">Galeri</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    {{-- Content --}}
    @yield('content')
     <!-- FOOTER -->
    <footer class="container my-5">
        <p class="fw-light mb-2">Counter Traffic:&ensp;<span id="CounterVisitor"></span>&ensp;traffic</p>
        <p class="text-center">&copy; 2024 Kayla Farma &middot;</p>
    </footer>
    {{-- Jumlah pengunjung --}}
    <script>
          var n = localStorage.getItem('on_load_counter');
            if (n === null) {
                n = 0;
            }

            n++;

            localStorage.setItem("on_load_counter", n);

            document.getElementById('CounterVisitor').innerHTML = n;
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>