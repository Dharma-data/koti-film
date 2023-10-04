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
  /* body {
    overflow-x: hidden;
    
  } */

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

  .card-header {
    background: transparent !important;
    border: none;
    color: white;
  }

  .card-head {
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

  @media only screen and (max-width:576px) {
    .header-head {
      margin-left: 0 !important;
      text-align: center !important;
    }

    .btn-film {
      margin-right: -5px !important;
      margin-bottom: 5px !important;
    }
  }
</style>

<body>
  
  <section style="background:linear-gradient(darkred,#212529);padding: 10rem 0rem;">
    <?php include 'navbar.php' ?>
    <div class="container">
      <div class="card w-100 mb-3" style="max-width: 100%;color: #C5C1C1;border:hidden;background: linear-gradient(#212529,darkred);padding: 20px;border-radius: 15px;height: 970px;" data-aos="zoom-in">
        <div class="card-header text-center">
          <h3>LIST FILM</h3>
          <div class="card w-25 bg-transparent mx-auto mt-5" style="border: none;">
            <?php
            if (isset($_GET['pesan'])) {
              ceklogin($_GET['pesan']);
            }
            ?>
            <?php
            if (isset($_GET['pesan'])) {
              peringatan($_GET['pesan']);
            }
            ?>
          </div>
        </div>
        <form action="#">
          <div class="form-input">
            <div class="row">
              <div class="col-md-9">
                <?php if ($_SESSION['level'] == 'admin') { ?>
                  <a class="btn btn-danger" href="film-tambah" style="font-size: 15px;text-decoration: none;background-color: red;border: none;"><i class="fa-sharp fa-solid fa-user-plus fa-bounce" style="color: white;"></i> Tambah Film</a>
                <?php } ?>
              </div>
              <div class="col-md-3">
                <input type="search" name="cari" id="cari" placeholder="Cari... Judul/Genre" style="border-radius: 10px;padding: 5px 10px;">
                <button type="submit" class="search-btn" style="padding: 5px 10px;border-radius: 10px;border:none;background-color: red;color: white">Cari</button>
              </div>
            </div>
          </div>
        </form>
        <div class="table-responsive">
          <table class="table table-borderless text-white">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Poster</th>
                <th scope="col">Judul Film</th>
                <th scope="col">Genre</th>
                <th scope="col">Tahun Rilis</th>
                <th scope="col">Tombol</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              if (isset($_GET['cari'])) {
                $cari = $_GET['cari'];
                $query = "SELECT tb_film.id_film,   
                                   tb_film.foto,
                                   tb_film.judul,
                                   tb_film.detail,
                                   tb_film.genre,
                                   tb_film.url,
                                   tb_film.tahun
                                FROM tb_film 
                                WHERE tb_film.judul LIKE '%$cari%' OR
                                 tb_film.genre LIKE '%$cari%' OR
                                 tb_film.id_film LIKE '%$cari%' 
                           ORDER BY tb_film.id_film";
              } else {
                $query = "SELECT tb_film.id_film,    
                                   tb_film.foto,
                                   tb_film.judul,
                                   tb_film.detail,
                                   tb_film.genre,
                                   tb_film.url,
                                   tb_film.tahun
                               FROM tb_film
                               ORDER BY tb_film.id_film";
              }
              $data = mysqli_query($koneksi, $query);
              while ($kolom = mysqli_fetch_array($data)) {
              ?>
                <tr>
                  <td>
                    <?php echo $no++ ?>
                  </td>
                  <td>
                    <a href="<?= '../../image/poster-film/' . $kolom['foto'] ?>" target="_blank">
                      <img class="pencet" src="<?= '../../image/poster-film/' . $kolom['foto'] ?>" alt="" style="border-radius: 10px;width: 100px;">
                    </a>
                  </td>
                  <td>
                    <h5><?= $kolom['judul'] ?></h5>
                  </td>
                  <td><?= $kolom['genre'] ?></td>
                  <td>
                    <p><?= $kolom['tahun'] ?></p>
                  </td>
                  <td>
                    <span>
                      <a href="detail-film?id=<?= $kolom['id_film']; ?>" class="btn btn-danger me-1 btn-film" style="background-color: gray; border: none;"><i class="fa-solid fa-info"></i> Detail</a>
                      <a href="<?= $kolom['url'] ?>" class="btn btn-danger me-1 btn-film" style="background-color: red; border: none;"><i class="fa-solid fa-cart-shopping"></i> Beli Tiket</a>
                      <?php if ($_SESSION['level'] == 'admin') { ?>
                        <a href="film-edit?id=<?= $kolom['id_film'] ?>" class="btn btn-danger me-1 btn-film" style="background-color: red; border: none;"><i class="fa-sharp fa-solid fa-user-pen"></i></a>
                        <a href="film-hapus?id=<?= $kolom['id_film'] ?>" class="btn btn-danger ms-1 btn-film" style="background-color: gray; border: none;"><i class="fa-sharp fa-solid fa-trash"></i> </a>
                      <?php } ?>
                    </span>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
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
</body>

</html>