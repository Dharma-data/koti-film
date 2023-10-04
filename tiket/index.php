<?php
include 'config.php';

error_reporting(0);

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login Anggota</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  <link href='../image/kotikop.png' rel='shortcut icon'>
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/fontawsome-icons/css/all.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
  <link rel="stylesheet" href="../vendor/aos/aos.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../dist/util.css">
  <link rel="stylesheet" type="text/css" href="../dist/main.css">
  <!--===============================================================================================-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400&display=swap" rel="stylesheet">
</head>

<style>
  @import url(https://fonts.googleapis.com/css?family=Lato:400,300,100);

  body {
    overflow-y: hidden;
    /* Sembunyikan vertical scrollbar */
    overflow-x: hidden;
    /* Sembunyikan horizontal scrollbar */
  }

  #particles-js,
  #parallax1,
  .layer,
  .some-space,
  .some-more-space {
    height: 100%;
    position: absolute;
    width: 100%;
  }

  #particles-js {
    opacity: 0.6;
  }

  .some-space {
    animation: rotate 18s 0.5s infinite linear reverse;
  }

  .some-more-space {
    -webkit-animation: rotate 15s 0.1s infinite linear;
    animation: rotate 15s 0.1s infinite linear;
  }

  @-webkit-keyframes rotate {
    0% {
      -webkit-transform: rotateZ(0deg) translate3d(0, 1.5%, 0) rotateZ(0deg);
      transform: rotateZ(0deg) translate3d(0, 1.5%, 0) rotateZ(0deg);
    }

    100% {
      -webkit-transform: rotateZ(360deg) translate3d(0, 1.5%, 0) rotateZ(-360deg);
      transform: rotateZ(360deg) translate3d(0, 1.5%, 0) rotateZ(-360deg);
    }
  }

  @keyframes rotate {
    0% {
      -webkit-transform: rotateZ(0deg) translate3d(0, 1.5%, 0) rotateZ(0deg);
      transform: rotateZ(0deg) translate3d(0, 1.5%, 0) rotateZ(0deg);
    }

    100% {
      -webkit-transform: rotateZ(360deg) translate3d(0, 1.5%, 0) rotateZ(-360deg);
      transform: rotateZ(360deg) translate3d(0, 1.5%, 0) rotateZ(-360deg);
    }
  }
</style>

<body>
  <div id="parallax1">
    <div class="layer" data-depth="0.4">
      <div id="particles-js"></div>
    </div>
    <div class="layer" data-depth="0.3">
      <div class="some-more-space">
      </div>
    </div>
  </div>

  <form action="login_proses.php" method="post">
    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100" data-aos="zoom-in">
          <div class="login100-pic js-tilt mx-auto" data-tilt>
            <a href="#"><img src="../image/kotikop.webp" alt="IMG"></a>
          </div>
          <form class="login100-form validate-form" style="background: linear-gradient();">
            <span class="login100-form-title pb-3 text-white" style="font-family: 'Poppins', sans-serif;">
              Selamat Datang
            </span>
            <div class="mx-auto pb-2">
              <?php
              if (isset($_GET['pesan'])) {
                ceklogin($_GET['pesan']);
              }
              ?>
              <!-- <?php
                    if (isset($_GET['pesan'])) {
                      peringatan($_GET['pesan']);
                    }
                    ?> -->
            </div>
            <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
              <input class="input100" type="text" name="username" placeholder="Username" style="font-family: 'Poppins', sans-serif;">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Password is required">
              <input class="input100" type="password" name="password" placeholder="Password" style="font-family: 'Poppins', sans-serif;">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </span>
            </div>

            <div class="container-login100-form-btn">
              <button class="login100-form-btn" style="font-family: 'Poppins', sans-serif;">
                Login
              </button>
            </div>

            <div class="text-center">
              <span class="txt1">
              </span>
              <br><br><br>
              <a class="txt2 text-white" href="https://me-qr.com/l/lupa-password" style="text-decoration: none;font-family: 'Poppins', sans-serif;">
                <h5 class="mb-5">Lupa Password</h5>
              </a>
            </div>
            <div class="text-center">
              <br><br><br>
              <a class="txt2 text-white" href="member/pendaftaran_member" style="font-family: 'Poppins', sans-serif;text-decoration: none;">
                <h5>Daftar</h5>
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </form>

  <!--===============================================================================================-->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://matthew.wagerfield.com/parallax/deploy/jquery.parallax.js'></script>
  <!--===============================================================================================-->
  <script src="../vendor/particles/particles.min.js"></script>
  <script src="../vendor/bootstrap/js/popper.js"></script>
  <script src="../vendor/js/bootstrap.bundle.min.js"></script>
  <!--===============================================================================================-->
  <script src="../vendor/select2/select2.min.js"></script>
  <script src="../dist/js/script.js"></script>
  <script src="../dist/style.js"></script>
  <!--===============================================================================================-->
  <script src="../vendor/aos/aos.js"></script>
  <script src="../vendor/tilt/tilt.jquery.min.js"></script>
  <script>
    $('.js-tilt').tilt({
      scale: 1.1
    })

    AOS.init({
      once: true
    });


    $('#parallax1').parallax({
        invertX: true,
        invertY: true,
        scalarX: 10,
        frictionY: .1
      }

    );


    particlesJS("particles-js", {
        "particles": {
          "number": {

            "value": 200,
            "density": {
              "enable": true,
              "value_area": 1000
            }
          }

          ,
          "color": {
            "value": "#ffffff"
          }

          ,
          "shape": {

            "type": "circle",
            "stroke": {
              "width": 0,
              "color": "red"
            }

            ,
            "polygon": {
              "nb_sides": 5
            }

            ,
            "image": {
              "src": "img/github.svg",
              "width": 100,
              "height": 100
            }
          }

          ,
          "opacity": {

            "value": 0.5,
            "random": false,
            "anim": {
              "enable": false,
              "speed": 1,
              "opacity_min": 0.1,
              "sync": false
            }
          }

          ,
          "size": {

            "value": 3,
            "random": true,
            "anim": {
              "enable": false,
              "speed": 40,
              "size_min": 0.1,
              "sync": false
            }
          }

          ,
          "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
          }

          ,
          "move": {

            "enable": true,
            "speed": 6,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "bounce": false,
            "attract": {
              "enable": false,
              "rotateX": 600,
              "rotateY": 1200
            }
          }
        }

        ,
        "interactivity": {

          "detect_on": "canvas",
          "events": {
            "onhover": {
              "enable": true,
              "mode": "grab"
            }

            ,
            "onclick": {
              "enable": true,
              "mode": "push"
            }

            ,
            "resize": true
          }

          ,
          "modes": {
            "grab": {

              "distance": 140,
              "line_linked": {
                "opacity": 1
              }
            }

            ,
            "bubble": {
              "distance": 400,
              "size": 40,
              "duration": 2,
              "opacity": 8,
              "speed": 3
            }

            ,
            "repulse": {
              "distance": 200,
              "duration": 0.4
            }

            ,
            "push": {
              "particles_nb": 4
            }

            ,
            "remove": {
              "particles_nb": 2
            }
          }
        }

        ,
        "retina_detect": true
      }

    );
  </script>
  <!--===============================================================================================-->
  <script src="js/main.js"></script>
  <!-- <script>
    setInterval(() => {

        window.location.href = '../maintenance/server-maintenance';

    }, 0, 3);
</script> -->
</body>

</html>