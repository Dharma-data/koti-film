<?php
include '../config.php';
session_start();
cekSession();
cekCookie();
?>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>KOTI-FILM</title>
  <link rel="shortcut icon" href="image/kotikop.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../vendor/fontawsome-icons/css/all.min.css">
  <link rel="stylesheet" href="../../vendor/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../vendor/aos/aos.css">
  <link rel="stylesheet" href="../../dist/style.css">
</head>

<style>
  body {
    overflow-x: hidden;
    /* Sembunyikan horizontal scrollbar */
  }

  ::-webkit-scrollbar {
    width: 9px;
  }

  ::-webkit-scrollbar-track {
    background: #570912;
  }

  ::-webkit-scrollbar-thumb {
    background: darkgray;
    border-radius: 10px;
  }

  ::-webkit-scrollbar-thumb:hover {
    background: gray;
  }

  #header {
    color: red !important;
  }

  .card {
    border-radius: 20px !important;
    scroll-behavior: auto !important;
  }

  .card-header {
    background: transparent !important;
    border: none;
    color: white;
  }

  .card-head {
    color: white !important;
  }

  .card-titel,
  .card-text {
    color: white !important;
  }

  .search-btn:hover {
    background-color: darkred !important;
  }

  .search-btn {
    transition: 0.2s;
  }

  .btn-danger:hover {
    background-color: darkred !important;
  }

  .pencet:hover {
    transform: scale(1.1);
  }

  .pencet {
    transition: 0.2s;
  }

  .custom-detail {
    height: 100%;
  }

  .custom-detail {
    padding: 30px;
    width: 100%;
    height: 570px;
  }

  @media only screen and (max-width:576px) {
    .header-head {
      margin-left: 0 !important;
      text-align: center !important;
    }

    .btn-film {
      margin-right: -5px !important;
      margin-bottom: 10px !important;
    }

    .card {
      width: 100% !important;
    }

    .custom-detail {
      width: 320px !important;
      height: 190px !important;
      padding: 10px;
    }
  }

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

<?php
$id = $_GET['id'];
$query = "SELECT * FROM tb_film WHERE id_film='$id'";
$data = mysqli_query($koneksi, $query);
$kolom = mysqli_fetch_array($data);
?>

<section style="padding: 10rem 0rem;background: linear-gradient(darkred,#212529);">
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top" id="navbar">
    <div class="container" id="navCont">
      <a class="navbar-brand warna" href="#" data-aos="fade-down"><img src="../../image/kotikop.png" alt="" width="150">KOTI-FILM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item" data-aos="fade-down">
            <a class="nav-link active" aria-current="page" href="../../index">Beranda</a>
          </li>
          <li class="nav-item" data-aos="fade-down" data-aos-delay="100">
            <a class="nav-link" href="../../#layanan">Layanan</a>
          </li>
          <li class="nav-item" data-aos="fade-down" data-aos-delay="200">
            <a class="nav-link" href="../../#tiket">Tiket Film</a>
          </li>
          <li class="nav-item" data-aos="fade-down" data-aos-delay="300">
            <a class="nav-link" href="../../#team">Pengembang</a>
          </li>
          <li class="nav-item" data-aos="fade-down" data-aos-delay="400">
            <a class="nav-link" href="../../#sponsor">Pendukung</a>
          </li>
          <li class="nav-item dropdown" data-aos="fade-down" data-aos-delay="500">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Lainnya
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="../../asset/chat/">Komentar</a>
              </li>
              <li>
                <a class="dropdown-item" href="../logout">Logout</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="card mx-auto" style="width: 60rem;background: linear-gradient(#212529,darkred);">
      <div class="card-header" style="padding: 30px 0px 10px 30px;">
        <h3>Detail</h3>
      </div>
      <iframe class="custom-detail" src="<?= $kolom['trailer']; ?>" frameborder="0"></iframe>
      <div class="row">
        <div class="col-md-0"></div>
        <div class="col-md-3">
          <div class="card-header pe-2">
            <a href="<?= '../../image/poster-film/' . $kolom['foto'] ?>" target="_blank">
              <img class="pencet" src="<?= '../../image/poster-film/' . $kolom['foto'] ?>" alt="" style="border-radius: 10px;width: 200px;">
            </a>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card-body text-white">
            <h2><?= $kolom['judul']; ?></h2>
            <h5><?= $kolom['genre']; ?></h5>
            <h5><?= $kolom['tahun']; ?></h5>
            <p><?= $kolom['detail']; ?></p>
          </div>
        </div>
      </div>
      <div class="card-footer py-3 text-end bg-transparent" style="border: none;">
        <a class="btn btn-secondary me-1" href="index"><< Kembali</a>
        <a class="btn btn-danger" href="<?= $kolom['url']; ?>" style="background-color: red;">Pesan Sekarang</a>
      </div>
    </div>
  </div>
</section>
<?php include 'footer.php' ?>

<script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
<script src="../../vendor/swiper/swiper-bundle.min.js"></script>
<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../dist/style.js"></script>
<!-- <script src="dist/js/popover.js"></script> -->
<script src="../../js/jquery-3.6.4.min.js"></script>
<script src="../../vendor/aos/aos.js"></script>

<script>
  AOS.init({
    once: true
  });
</script>