<head>
  <meta charset="utf-8" />
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

  <!-- Demo styles -->
  <style>
    .swiper-team {
      width: 50%;
      height: 100%;
    }

    .swiper-slide-team {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide-team img {
      display: block;
      width: 40%;
      height: 100%;
      object-fit: cover;
      margin: auto;
    }

    .card {
      width: 100%;
      padding: 0px -50px;
    }

    @media only screen and (max-width:576px) {
      .swiper-team {
        width: 240px !important;
        height: 580px !important;
        margin: 30px 60px;
        text-align: center;
        margin: auto;
      }

      .swiper-slide-team img {
        width: 90%;
        margin-top: -50px;
      }

      .card{
        width: 90%;
        margin: auto;
      }
    }

    .swiper-pagination-bullet {
      width: 20px;
      height: 20px;
      text-align: center;
      line-height: 20px;
      font-size: 12px;
      color: #fff;
      opacity: 1;
      background: darkred;
    }

    .swiper-pagination-bullet-active {
      color: #fff;
      background: red;
    }

    .autoplay-progress {
      position: absolute;
      right: 16px;
      bottom: 16px;
      z-index: 10;
      width: 48px;
      height: 48px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      color: white;
    }

    .autoplay-progress svg {
      --progress: 0;
      position: absolute;
      left: 0;
      top: 0px;
      z-index: 10;
      width: 100%;
      height: 100%;
      stroke-width: 4px;
      stroke: red;
      fill: none;
      stroke-dashoffset: calc(125.6 * (1 - var(--progress)));
      stroke-dasharray: 125.6;
      transform: rotate(-90deg);
    }

    .i-brand{
      color: red;
    }

    .i-brand:hover{
      color: darkred !important;
    }

    .i-brand{
      transition: 0.2s;
    }
  </style>
</head>

<section id="team" style="background: linear-gradient(#212529,darkred);padding: 6rem 0rem;">
  <div class="container">
    <div class="col-md-7 col-md-offset-4 mx-auto">
      <div class="card mx-auto" style="background: linear-gradient(darkred,#212529);border-radius: 20px;padding-bottom: 30px;">
        <div class="card-header my-4 text-center" style="color: white;">
          <h3>TEAM</h3>
        </div>
        <!-- Swiper -->
        <div class="swiper swiper-team mySwiper">
          <div class="swiper-wrapper mb-5">
            <div class="swiper-slide swiper-slide-team bg-transparent">
              <div class="col">
                <div class="card h-100 bg-transparent" style="border: none;" data-aos="zoom-in" data-aos-offset="250">
                  <img src="image/dharma1.webp" class="card-img-top" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Dharma Andhika</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text" style="font-size: 25px;">
                      <a href="" data-aos="fade-up"><i class="fa-brands i-brand fa-facebook"></i></a>
                      <a href="" class="mx-3" data-aos="fade-up" data-aos-delay="100"><i class="fa-brands i-brand fa-instagram"></i></a>
                      <a href="" data-aos="fade-up" data-aos-delay="200"><i class="fa-brands i-brand fa-whatsapp"></i></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide swiper-slide-team bg-transparent">
              <div class="col">
                <div class="card h-100 bg-transparent" style="border: none;" data-aos="zoom-in" data-aos-offset="250">
                  <img src="image/wira.webp" class="card-img-top" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Wira Atmaja</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text" style="font-size: 25px;">
                      <a href="" data-aos="fade-up"><i class="fa-brands i-brand fa-facebook"></i></a>
                      <a href="" class="mx-3" data-aos="fade-up" data-aos-delay="100"><i class="fa-brands i-brand fa-instagram"></i></a>
                      <a href="" data-aos="fade-up" data-aos-delay="200"><i class="fa-brands i-brand fa-whatsapp"></i></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide swiper-slide-team bg-transparent">
              <div class="col">
                <div class="card h-100 bg-transparent" style="border: none;" data-aos="zoom-in" data-aos-offset="250">
                  <img src="image/satria.webp" class="card-img-top" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Satria Wirangga</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text" style="font-size: 25px;">
                      <a href="" data-aos="fade-up"><i class="fa-brands i-brand fa-facebook"></i></a>
                      <a href="" class="mx-3" data-aos="fade-up" data-aos-delay="100"><i class="fa-brands i-brand fa-instagram"></i></a>
                      <a href="" data-aos="fade-up" data-aos-delay="200"><i class="fa-brands i-brand fa-whatsapp"></i></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide swiper-slide-team bg-transparent">
              <div class="col">
                <div class="card h-100 bg-transparent" style="border: none;" data-aos="zoom-in" data-aos-offset="250">
                  <img src="image/tio.webp" class="card-img-top" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Tio Lovan</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text" style="font-size: 25px;">
                      <a href="" data-aos="fade-up"><i class="fa-brands i-brand fa-facebook"></i></a>
                      <a href="" class="mx-3" data-aos="fade-up" data-aos-delay="100"><i class="fa-brands i-brand fa-instagram"></i></a>
                      <a href="" data-aos="fade-up" data-aos-delay="200"><i class="fa-brands i-brand fa-whatsapp"></i></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide swiper-slide-team bg-transparent">
              <div class="col">
                <div class="card h-100 bg-transparent" style="border: none;" data-aos="zoom-in" data-aos-offset="250">
                  <img src="image/madeegar.webp" class="card-img-top" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Madeegar</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text" style="font-size: 25px;">
                      <a href="" data-aos="fade-up"><i class="fa-brands i-brand fa-facebook"></i></a>
                      <a href="" class="mx-3" data-aos="fade-up" data-aos-delay="100"><i class="fa-brands i-brand fa-instagram"></i></a>
                      <a href="" data-aos="fade-up" data-aos-delay="200"><i class="fa-brands i-brand fa-whatsapp"></i></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="autoplay-progress">
          <svg viewBox="0 0 48 48">
            <circle cx="24" cy="24" r="20"></circle>
          </svg>
          <span></span>
        </div>

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
          const progressCircle = document.querySelector(".autoplay-progress svg");
          const progressContent = document.querySelector(".autoplay-progress span");
          var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
              delay: 4500,
              disableOnInteraction: false
            },
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
              renderBullet: function(index, className) {
                return '<span class="' + className + '">' + (index + 1) + "</span>";
              },
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev"
            },
            on: {
              autoplayTimeLeft(s, time, progress) {
                progressCircle.style.setProperty("--progress", 1 - progress);
                progressContent.textContent = `${Math.ceil(time / 1000)}s`;
              }
            }
          });
        </script>
      </div>
    </div>
  </div>
</section>