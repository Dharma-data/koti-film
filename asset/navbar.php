<style>
  .navbar {
    transition: all 500ms ease-in-out;
  }


  .navbar>div {
    transition: all 1000ms ease-in-out;
  }

  li>a {
    position: relative;
    color: red;
    text-decoration: none;
  }

  li>a:hover {
    color: red;
  }

  li>a:before {
    content: "";
    position: absolute;
    width: 100%;
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: red;
    visibility: hidden;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s;
  }

  li>a:hover:before {
    visibility: visible;
    -webkit-transform: scaleX(1);
    transform: scaleX(1);
  }

  .nav-link,
  .warna,
  .dropdown-item {
    color: #c1c1c1 !important;
  }

  .nav-link:hover {
    color: red !important;
  }

  @media only screen and (min-width: 768px) {
    .dropdown:hover .dropdown-menu {
      display: block;
    }
  }

  .dropdown-menu {
    background-color: #212529;
  }

  .dropdown-item {
    background: transparent !important;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top" id="navbar">
  <div class="container" id="navCont">
    <a class="navbar-brand warna" href="#" data-aos="fade-down"><img src="image/kotikop.webp" alt="" width="150">KOTI-FILM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item" data-aos="fade-down">
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item" data-aos="fade-down" data-aos-delay="100">
          <a class="nav-link" href="#layanan">Layanan</a>
        </li>
        <li class="nav-item" data-aos="fade-down" data-aos-delay="200">
          <a class="nav-link" href="#tiket">Tiket Film</a>
        </li>
        <li class="nav-item" data-aos="fade-down" data-aos-delay="300">
          <a class="nav-link" href="#team">Pengembang</a>
        </li>
        <li class="nav-item" data-aos="fade-down" data-aos-delay="400">
          <a class="nav-link" href="#sponsor">Pendukung</a>
        </li>
        <li class="nav-item dropdown" data-aos="fade-down" data-aos-delay="500">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lainnya
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="asset/chat/">Komentar</a>
            </li>
            <li>
              <a class="dropdown-item" href="tiket/">Login</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>