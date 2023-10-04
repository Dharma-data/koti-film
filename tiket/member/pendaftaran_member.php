<?php
include '../config.php';
// session_start();
// cekSession();
// cekCookie();
?>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dharma-data</title>
  <link rel="shortcut icon" href="../../image/kotikop.png" type="image/x-icon">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/style-alert.css">
  <link rel="stylesheet" href="../../fonts/font-icon-bootstrap/bootstrap-icons.css">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">
</head>

<style>
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

<body onload="startTime()" style="background: linear-gradient(#212529,darkred);">
  <section id="sidebar" style="background: linear-gradient(darkred,#212529);">
    <a href="#" class="brand" style="background-color: darkred;">
      <img src="../../image/kotikop.png" alt="">
      <span class="text" style="color: red;">Koti-Film</span>
    </a>
    <?php if (isset($_SESSION['username'])) { ?>
      <ul class="side-menu top">
        <li class="">
          <a href="index">
            <i class='bx bxs-dashboard'></i>
            <span class="text">Dashboard</span>
          </a>
        </li>
        <li class="active">
          <a href="anggota">
            <i class='bx mdi mdi-account'></i>
            <span class="text">User</span>
          </a>
        </li>
        <li>
          <a href="../upload/upload">
            <i class='bx mdi mdi-folder-download'></i>
            <span class="text">File</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bxs-message-dots'></i>
            <span class="text">Message</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bxs-group'></i>
            <span class="text">Team</span>
          </a>
        </li>
      </ul>
      <ul class="side-menu top">
        <li>
          <a href="#">
            <i class='bx bxs-cog'></i>
            <span class="text">Settings</span>
          </a>
        </li>
        <li>
          <a href="../logout" class="logout">
            <i class='bx mdi mdi-logout'></i>
            <span class="text">Logout</span>
          </a>
        </li>
      </ul>
    <?php } ?>
  </section>
  <!-- SIDEBAR -->



  <!-- CONTENT -->
  <section id="content">
    <!-- NAVBAR -->
    <!-- <?php
          $query = "SELECT * FROM tb_mahasiswa WHERE id_mhs limit 1";
          $data = mysqli_query($koneksi, $query);
          while ($d = mysqli_fetch_array($data)) {
          ?> -->

    <nav style="background-color: darkred;">
      <i class='bx bx-menu'></i>
      <?php if (isset($_SESSION['username'])) { ?>
        <form action="#">
          <div class="form-input">
            <input type="search" placeholder="Search...">
            <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
          </div>
        </form>
        <span><?= $_SESSION['username']; ?></span>
        <a href="../../image/dharma1.webp" class="profile">
          <img src="<?= '../../image/foto-anggota/' . $_SESSION['foto'] ?>" alt="">
        </a>
      <?php } ?>
    </nav>

  <?php } ?>
  <!-- NAVBAR -->

  <!-- MAIN -->
  <main>
    <div class="head-title">
      <div class="left">
        <h1 style="color: white;">Pendaftaran</h1>
        <ul class="breadcrumb">
          <li>
            <a class="active" href="../login">Login</a>
          </li>
          <li>
            <i class='bx bx-chevron-right'></i>
          </li>
          <li>
            <a class="" href="#">Pendaftaran</a>
          </li>
        </ul>
      </div>
      <a class="waktu" style="background-color: darkred;"><?php date_default_timezone_set("Asia/makassar") . '<br>';
                                                          echo date("d-m-Y"); ?> <span id="watch"></span></a>
    </div>


    <div class="table-data">
      <div class="order" style="background: linear-gradient(darkred,#212529);">
        <div class="head" style="background-color: transparent;color:white">
          <h3>Pendaftaran Member</h3>
        </div>
        <div class="konten" style="background: linear-gradient(#212529,darkred);">
          <div class="kepala" style="background-color: #212529;">
            <div class="lock"></div>
            <h2 class="judul">Form Member Account</h2>
          </div>
          <div class="artikel">
            <form class="horizontal" action="pendaftaran_member_proses" method="POST" enctype="multipart/form-data">
              <fieldset>
                <legend style="color: white;">Data Keanggotaan</legend>
                <div class="grup" style="color: white;">
                  <label for="username">Username/ID<span class="required">*</span></label>
                  <input type="text" name="username" required placeholder="Masukkan Username Anda">
                </div>
                <div class="grup" style="color: white;">
                  <label for="password">Password<span class="required">*</span></label>
                  <input type="password" name="password" required placeholder="Masukkan password Anda">
                </div>
              </fieldset>
              <fieldset>
                <legend style="color: white;">Data Pribadi</legend>
                <div class="grup" style="color: white;">
                  <label for="nama">Nama Lengkap<span class="required">*</span></label>
                  <input type="text" name="nama" required placeholder="Masukkan Nama Lengkap Anda">
                </div>
                <div class="grup" style="color: white;">
                  <label for="email">E-mail<span class="required">*</span></label>
                  <input type="email" name="email" required placeholder="Masukkan Email Anda">
                </div>
                <div class="grup" style="color: white;">
                  <label for="tanggal-lahir">Tanggal Lahir<span class="required">*</span></label>
                  <input type="date" name="tgl_lahir" pattern="Tanggal/Bulan/Tahun" required placeholder=" Masukkan Tanggal Lahir">
                </div>
                <div class="grup" style="color: white;">
                  <label for="alamat">Alamat<span class="required">*</span></label>
                  <input type="text" name="Alamat" required placeholder="Masukkan Alamat Anda">
                </div>
                <div class="grup" style="color: white;">
                  <label for="no-hp">No-Hp<span class="required">*</span></label>
                  <input type="text" name="No_Hp" required placeholder="Masukkan No-Handphone Anda">
                </div>
                <div class="grup" style="color: white;">
                  <label for="file">Foto Anda<span class="required">*</span></label>
                  <input type="file" name="foto" required>
                </div>
                <button type="submit" value="Simpan" class="btn-biru-muda1"> Simpan</button>
                <input type="reset" value="Reset" class="btn-grey">
              </fieldset>
              <div class="footer" style="color: white;">
                <p><b>Copyright &copy;<?php echo date('Y') ?> Dharma-data.com</b> | Only the best <br> dharma-data dashboard templates </p>All rights reserved.
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- MAIN -->
  </section>
  <!-- CONTENT -->
  <script src="../../dist/js/script.js"></script>
  <script src="../js/script.js"></script>
  <script src="../../js/jquery-3.6.4.min.js"></script>
  <script src="../../dist/style.js"></script>

</body>

</html>