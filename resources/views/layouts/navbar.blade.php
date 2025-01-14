<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="img-fluid rounded" style="width: 5%">
      <a class="navbar-brand" href="#"></a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto" style="gap: 20px;">
            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}#visi-misi">Visi & Misi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}#program-kelas">Program</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('kegiatan')}}">Kegiatan</a>
            </li>
        </ul>
        <div class="d-flex align-items-center" style="gap: 16px;>
            <a href="https://instagram.com" class="text-dark me-2" target="_blank">
                <i class="bi bi-instagram"></i>
            </a>
            <a href="https://youtube.com" class="text-dark" target="_blank">
                <i class="bi bi-youtube"></i>
            </a>
            <a href="{{route('daftar')}}" class="btn btn-success ms-4">Daftar</a>
        </div>
      </div>
    </div>
  </nav>
  