<?php
include '../config.php';
session_start();
cekSession();
cekCookie();

?>

<!DOCTYPE html>
<html lang="id" class="no-js">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>KOTI-FILM</title>
  <link rel="shortcut icon" href="../image/kotikop.webp" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../vendor/fontawsome-icons/css/all.min.css">
  <link rel="stylesheet" href="../../vendor/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../vendor/aos/aos.css">
  <link rel="stylesheet" href="../../dist/style.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

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

  .btn-danger {
    background-color: red !important;
    border: none;
  }

  .btn-danger:hover {
    background-color: #9D0913 !important;
  }

  @media only screen and (min-width: 768px) {
    .dropdown:hover .dropdown-menu {
      display: block;
    }
  }

  @media only screen and (max-width:576px) {
    .card {
      width: 320px !important;
      padding: 25px !important;
    }

    .text-end {
      text-align: center !important;
    }
  }

  .dropdown-menu {
    background-color: #212529;
  }

  .dropdown-item {
    background: transparent !important;
  }
</style>

<body>
  <?php include 'navbar.php' ?>
  <section style="background:linear-gradient(darkred,#242830);padding: 8rem 0rem;">

    <div class="card w-50 mx-auto p-5 text-white" style="background: linear-gradient(#212529,darkred);border-radius: 20px;">
      <form action="film-proses.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Judul</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
          <textarea type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="detail"></textarea>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Genre</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="genre">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Tahun Rilis</label>
          <input type="date" class="form-control" id="exampleInputPassword1" name="tahun">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Trailer</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="trailer">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Link Pembayaran</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="url">
        </div>
        <div class="mb-3">
          <label for="file" class="form-label">Poster</label>
          <input type="file" class="form-control" id="exampleInputPassword1" name="foto">
        </div>
        <div class="text-end">
          <a class="btn btn-secondary me-1" href="index"><< Kembali</a>
          <button type="submit" value="Simpan" class="btn btn-danger my-1"> Simpan</button>
        </div>
      </form>
    </div>
  </section>
  <?php include 'footer.php' ?>
  <!-- CONTENT -->
  <script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
  <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
  <script src="../../vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../dist/style.js"></script>
  <!-- <script src="dist/js/popover.js"></script> -->
  <script src="../../js/jquery-3.6.4.min.js"></script>
  <script src="../../vendor/aos/aos.js"></script>
</body>

</html>