<style>
  .swiper {
    position: relative;
    width: 380px;
    height: 520px;
  }

  .swiper-tiket:hover {
    transform: scale(1.07);
  }

  .swiper-tiket {
    transition: 0.3s;
  }

  .swiper-slide {
    border-radius: 18px;
  }

  .swiper-slide img {
    width: 100%;
    object-fit: cover;
    border-radius: 18px;
  }

  @media only screen and (max-width:576px) {
    .swiper {
      width: 240px !important;
      height: 320px !important;
      /* margin: 20px 60px; */
      text-align: center;
    }

  }

  .card-paket {
    height: 100%;
  }

  .garis-bawah {
    text-decoration: none;
  }

  i {
    color: white;
  }

  .btn-danger {
    background-color: red;
  }

  .btn-danger:hover {
    background-color: #9A090B;
  }

  h5,
  p,

  .modal-title,
  .modal-body {
    color: white !important;
  }

  .custom-iframe {
    width: 1100px;
    height: 620px;
  }

  .list-group-tiket .list-group-item,
  .card,
  .card-footer,
  .card-header {
    border: none;
  }

  .list-group-tiket .list-group-item:hover {
    background-color: #9A090B !important;
  }

  .card-title {
    color: red;
  }

  .list-group-tiket .list-group-item {
    transition: 0.2s;
  }

  @media only screen and (max-width:576px) {
    .gambar-tiket {
      width: 190px !important;
      height: 235px !important;
      margin: auto !important;
    }

    .custom-iframe {
      width: 300px !important;
      height: 170px !important;
    }

    .btn-danger {
      font-size: large !important;
      margin-right: 0px !important;
    }

    .card-footer {
      text-align: center;
    }

    .btn-tiket {
      margin-top: 10px;
      font-size: large !important;
    }

    .tiket-image {
      margin-top: 30px;
    }

    .card-title {
      text-align: center;
    }
  }

  .footer-tiket{
    color: #c1c1c1;
  }

  .footer-tiket:hover{
    color: red;
  }

  .footer-tiket{
    transition: 0.2s;
  }

  .copyright-tiket:hover{
    color: red !important;
  }

  .copyright-tiket {
    transition: 0.2s;
  }

  .judul-tebal {
    font-weight: 1000;
  }
</style>

<section id="tiket" style="padding: 5rem 0rem; background: linear-gradient(darkred,#212529);">
  <div class="container">
    <div class="card ps-2 py-3" style="border: none;border-radius: 15px; background: linear-gradient(#212529,darkred);">
      <div class="card-header border-bottom mt-3 mb-5 text-center header-tiket">
        <h3 class="text-white">TIKET TERLARIS</h3>
      </div>
      <div class="row">
        <div class="col-md-4 mb-3">
          <div class="list-group list-group-tiket " id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action bg-transparent text-white active" id="list-ratu-ilmu-hitam-list" data-bs-toggle="list" href="#list-ratu-ilmu-hitam" role="tab" aria-controls="list-ratu-ilmu-hitam"><img src="image/ratu-ilmu-hitam.webp" alt="" style="width:50px;height:75px;border-radius: 5px;"> RATU ILMU HITAM</a>
            <a class="list-group-item list-group-item-action bg-transparent text-white" id="list-sunyi-list" data-bs-toggle="list" href="#list-sunyi" role="tab" aria-controls="list-sunyi"><img src="image/sunyi.webp" alt="" style="width:50px;height:75px;border-radius: 5px;"> SUNYI</a>
            <a class="list-group-item list-group-item-action bg-transparent text-white" id="list-a-plus-list" data-bs-toggle="list" href="#list-a-plus" role="tab" aria-controls="list-a-plus"><img src="image/a+.webp" alt="" style="width:50px;height:75px;border-radius: 5px;"> A+</a>
            <a class="list-group-item list-group-item-action bg-transparent text-white" id="list-simanis-jembatan-ancol-list" data-bs-toggle="list" href="#list-simanis-jembatan-ancol" role="tab" aria-controls="list-simanis-jembatan-ancol"><img src="image/simanis-jembatan-ancol.webp" alt="" style="width:50px;height:75px;border-radius: 5px;"> SI-MANIS JEMBATAN ANCOL</a>
            <a class="list-group-item list-group-item-action bg-transparent text-white" id="list-miracle-in-cell-list" data-bs-toggle="list" href="#list-miracle-in-cell" role="tab" aria-controls="list-miracle-in-cell"><img src="image/miracle-in-cell.webp" alt="" style="width:50px;height:75px;border-radius: 5px;"> MIRACLE IN CELL No. 7</a>
          </div>
        </div>
        <div class="col-md-8 tiket-image">
          <div class="tab-content text-white" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-ratu-ilmu-hitam" role="tabpanel" aria-labelledby="list-ratu-ilmu-hitam-list">
              <div class="card mb-3 bg-transparent" style="max-width: 900px;">
                <div class="row g-0" data-aos="flip-up" data-aos-offset="250">
                  <img src="image/ratu-ilmu-hitam.webp" class="img-fluid gambar-tiket" alt="..." style="border-radius: 15px;width: 250px;height: 340px;">
                  <div class="col-md-8">
                    <div class="card-body">
                      <h3 class="card-title judul-tebal">RATU ILMU HITAM</h3>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <div class="card-footer bg-transparent">
                        <a href="tiket" class="btn btn-danger my-auto me-2" style="font-size: 17px;"><i class="fa-sharp fa-solid fa-cart-shopping"></i> BELI TIKET</a>
                        <button type="button" class="btn btn-dark btn-tiket" data-bs-toggle="modal" data-bs-target="#tiket1" style="font-size: 17px;"><i class="fa-solid fa-circle-play"></i>
                          TRAILER
                        </button>
                        <div class="mt-3" style="font-size: 11px;">
                          <p>Copyright &copy; 2019 <a class="copyright-tiket" href="https://rapifilms.com" style="text-decoration: none;color: silver;">Rapifilms.com</a> | All Right Reserved</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="list-sunyi" role="tabpanel" aria-labelledby="list-sunyi-list">
              <div class="card mb-3 bg-transparent" style="max-width: 900px;">
                <div class="row g-0" data-aos="flip-up" data-aos-offset="250">
                  <img src="image/sunyi.webp" class="img-fluid gambar-tiket" alt="..." style="border-radius: 15px;width: 250px;height: 340px;">
                  <div class="col-md-8">
                    <div class="card-body">
                      <h3 class="card-title judul-tebal">SUNYI</h3>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <div class="card-footer bg-transparent">
                        <a href="tiket" class="btn btn-danger my-auto me-2" style="font-size: 17px;"><i class="fa-sharp fa-solid fa-cart-shopping"></i> BELI TIKET</a>
                        <button type="button" class="btn btn-dark btn-tiket" data-bs-toggle="modal" data-bs-target="#tiket2" style="font-size: 17px;"><i class="fa-solid fa-circle-play"></i>
                          TRAILER
                        </button>
                        <div class="mt-3" style="font-size: 11px;">
                          <p>Copyright &copy; 2019 <a class="copyright-tiket" href="https://mdentertaiment.com" style="text-decoration: none;color: silver;">MDEntertaiment.com</a> | All Right Reserved</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="list-a-plus" role="tabpanel" aria-labelledby="list-a-plus-list">
              <div class="card mb-3 bg-transparent" style="max-width: 900px;">
                <div class="row g-0" data-aos="flip-up" data-aos-offset="250">
                  <img src="image/a+.webp" class="img-fluid gambar-tiket" alt="..." style="border-radius: 15px;width: 250px;height: 340px;">
                  <div class="col-md-8">
                    <div class="card-body">
                      <h3 class="card-title judul-tebal">A+</h3>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <div class="card-footer bg-transparent">
                        <a href="tiket" class="btn btn-danger my-auto me-2" style="font-size: 17px;"><i class="fa-sharp fa-solid fa-cart-shopping"></i> BELI TIKET</a>
                        <button type="button" class="btn btn-dark btn-tiket" data-bs-toggle="modal" data-bs-target="#tiket3" style="font-size: 17px;"><i class="fa-solid fa-circle-play"></i>
                          TRAILER
                        </button>
                        <div class="mt-3" style="font-size: 11px;">
                          <p>Copyright &copy; 2023 <a class="copyright-tiket" href="https://falcon.co.id" style="text-decoration: none;color: silver;">Falcon.co.id</a> | All Right Reserved</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="list-simanis-jembatan-ancol" role="tabpanel" aria-labelledby="list-simanis-jembatan-ancol-list">
              <div class="card mb-3 bg-transparent" style="max-width: 900px;">
                <div class="row g-0" data-aos="flip-up" data-aos-offset="250">
                  <img src="image/simanis-jembatan-ancol.webp" class="img-fluid gambar-tiket" alt="..." style="border-radius: 15px;width: 250px;height: 340px;">
                  <div class="col-md-8">
                    <div class="card-body">
                      <h3 class="card-title judul-tebal">SI-MANIS JEMBATAN ANCOL</h3>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <div class="card-footer bg-transparent">
                        <a href="tiket" class="btn btn-danger my-auto me-2" style="font-size: 17px;"><i class="fa-sharp fa-solid fa-cart-shopping"></i> BELI TIKET</a>
                        <button type="button" class="btn btn-dark btn-tiket" data-bs-toggle="modal" data-bs-target="#tiket4" style="font-size: 17px;"><i class="fa-solid fa-circle-play"></i>
                          TRAILER
                        </button>
                        <div class="mt-3" style="font-size: 11px;">
                          <p>Copyright &copy; 2019 <a class="copyright-tiket" href="https://mvpworld.com" style="text-decoration: none;color: silver;">MpvPictures.com</a> | All Right Reserved</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="list-miracle-in-cell" role="tabpanel" aria-labelledby="list-miracle-in-cell-list">
              <div class="card mb-3 bg-transparent" style="max-width: 900px;">
                <div class="row g-0" data-aos="flip-up" data-aos-offset="250">
                  <img src="image/miracle-in-cell.webp" class="img-fluid gambar-tiket" alt="..." style="border-radius: 15px;width: 250px;height: 340px;">
                  <div class="col-md-8">
                    <div class="card-body">
                      <h3 class="card-title judul-tebal">MIRACLE IN CELL No. 7</h3>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <div class="card-footer bg-transparent">
                        <a href="tiket" class="btn btn-danger my-auto me-2" style="font-size: 17px;"><i class="fa-sharp fa-solid fa-cart-shopping"></i> BELI TIKET</a>
                        <button type="button" class="btn btn-dark btn-tiket" data-bs-toggle="modal" data-bs-target="#tiket5" style="font-size: 17px;"><i class="fa-solid fa-circle-play"></i>
                          TRAILER
                        </button>
                        <div class="mt-3" style="font-size: 11px;">
                          <p>Copyright &copy; 2022 <a class="copyright-tiket" href="https://falcon.co.id" style="text-decoration: none;color: silver;">Falcon.co.id</a> | All Right Reserved</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer text-center bg-transparent" style="border: none;">
        <h5>
          <a href="tiket" class="footer-tiket" style="text-decoration: none;"><i class="fa-solid fa-angles-right"></i> Lihat Selengkapnya</a>
        </h5>
      </div>
    </div>
  </div>
</section>

<?php include 'modal/modal-tiket.php' ?>