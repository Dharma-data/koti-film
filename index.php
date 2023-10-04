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
  <link rel="stylesheet" href="vendor/fontawsome-icons/css/all.min.css">
  <link rel="stylesheet" href="vendor/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="vendor/aos/aos.css">
  <link rel="stylesheet" href="owl-carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="owl-carousel/dist/assets/owl.theme.default.min.css" />
  <link rel="stylesheet" href="dist/style.css">
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
  
</style>

<body>
  <div class="body-wrap">
    <main>
      <?php
      include 'asset/navbar.php';
      include 'asset/header.php';
      include 'asset/layanan.php';
      include 'asset/tiket.php';
      include 'asset/team.php';
      include 'asset/sponsor.php';
      include 'asset/footer.php';
      ?>
    </main>
  </div>

  <script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
  <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/swiper.js"></script>
  <script src="dist/style.js"></script>
  <!-- <script src="dist/js/popover.js"></script> -->
  <script src="js/jquery-3.6.4.min.js"></script>
  <script src="dist/typewriter/core.js"></script>
  <script src="dist/typewriter/header.js"></script>
  <script src="owl-carousel/dist/owl.carousel.min.js"></script>
  <script src="vendor/aos/aos.js"></script>

  <script>
    $('.owl-sponsor').owlCarousel({
      loop: false,
      margin: 10,
      nav: false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 3
        }
      }
    });

    AOS.init({
      once:true
    });
  </script>
</body>

</html>