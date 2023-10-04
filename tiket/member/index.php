<?php
include '../config.php';
session_start();
cekSession();
cekCookie();
?>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dharma-data</title>
  <link rel="shortcut icon" href="../../image/logo/dharma-logo3.png" type="image/x-icon">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/style-alert.css">
  <link rel="stylesheet" href="../../fonts/font-icon-bootstrap/bootstrap-icons.css">
  <link href='../../vendor/box-icons/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">
</head>

<body onload="startTime()">
  <section id="sidebar">
    <a href="#" class="brand">
      <img src="../../image/logo/dharma-logo3.png" alt="">
      <span class="text">Dharma-data</span>
    </a>
    <ul class="side-menu top">
      <li class="active">
        <a href="#">
          <i class='bx bxs-dashboard'></i>
          <span class="text">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="anggota">
          <i class='bx mdi mdi-account'></i>
          <span class="text">User</span>
        </a>
      </li>
      <li>
        <a href="../upload/">
          <i class='bx mdi mdi-folder-download'></i>
          <span class="text">File</span>
        </a>
      </li>
      <li>
        <a href="../live-chat/">
          <i class='bx bxs-message-dots'></i>
          <span class="text">Chat</span>
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
  </section>
  <!-- SIDEBAR -->



  <!-- CONTENT -->
  <section id="content">
    <!-- NAVBAR -->
    <?php
    $query = "SELECT * FROM tb_mahasiswa WHERE id_mhs limit 1";
    $data = mysqli_query($koneksi, $query);
    while ($d = mysqli_fetch_array($data)) {
    ?>
      <nav>
        <i class='bx bx-menu'></i>
        <form action="#">
          <!-- <div class="form-input">
            <input type="search" placeholder="Search...">
            <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
          </div> -->
        </form>
        <span><?= $_SESSION['username']; ?></span>
        <a href="<?= '../../image/foto-anggota/' . $_SESSION['foto'] ?>" class="profile">
          <img src="<?= '../../image/foto-anggota/' . $_SESSION['foto'] ?>" alt="">
        </a>
      </nav>
    <?php } ?>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
      <div class="tengah">
        <marquee behavior="" direction="">Catatan Apabila Ada Data Tidak Tampil, Itu Berarti Admin Membatasi Hak Akses</marquee>
      </div>
      <div class="head-title">
        <div class="left">
          <h1>MY Dashboard</h1>
          <ul class="breadcrumb">
            <li>
              <a href="#">Dashboard</a>
            </li>
          </ul>
        </div>
        <a class="waktu"><?php date_default_timezone_set("Asia/makassar") . '<br>';
                          echo date("d-m-Y"); ?> <span id="watch"></span></a>
      </div>


      <div class="table-data">
        <div class="order">
          <div class="head">
            <h3>Dashboard</h3>
          </div>
          <div class="pesan-alert"><?php
                                    if (isset($_GET['pesan'])) {
                                      ceklogin($_GET['pesan']);
                                    }
                                    ?></div>
          <h3 style="text-align: center;">SELAMAT DATANG <?= $_SESSION['username']; ?></h3>
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