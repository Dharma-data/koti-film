<style>
  .program {
    filter: grayscale(1);
    content: ();
    transition: 0.2s;
  }

  .program:hover {
    transform: scale(1.2);
    filter: grayscale(0);
  }

  @media only screen and (max-width: 576px) {
    .program {
      filter: grayscale(0);
    }

    .program1 {
      margin-top: 20px !important;
    }

    .program2 {
      margin-top: 60px !important;
    }
  }

.sponsor{
  color: white;
  padding-bottom: 20px;
}
</style>

<section id="sponsor" style="padding: 8rem 0rem;background:linear-gradient(darkred,#212529);">
  <div class="container">
    <div class="text-center sponsor">
      <h3>PENDUKUNG</h3>
    </div>
    <div class="owl-carousel owl-theme owl-sponsor">
      <div class="item" data-aos="zoom-in" data-aos-offset="250">
        <div class="card" style="border: hidden;background: transparent;">
          <img src="image/progress.webp" alt="" style="border-radius: 50%;width: 100px; margin: auto;margin-top: 30px;">
        </div>
      </div>
      <div class="item" data-aos="zoom-in" data-aos-offset="250" data-aos-delay="100">
        <div class="card" style="border: hidden;background: transparent;">
        <img src="image/stikom.png" alt="" style="border-radius: 50%;width: 200px; margin: auto;">
        </div>
      </div>
      <div class="item" data-aos="zoom-in" data-aos-offset="250" data-aos-delay="200">
        <div class="card" style="border: hidden;background: transparent;">
          <img src="image/dharma-logo3.png" alt="" style="width: 230px; margin: auto;margin-top:60px">
        </div>
      </div>
    </div>
  </div>
</section>