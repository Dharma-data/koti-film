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
  <link rel="stylesheet" href="../../vendor/fontawsome-icons/css/all.min.css">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">
</head>

<body onload="startTime()">
  <section id="sidebar">
    <a href="#" class="brand">
      <img src="../../image/logo/dharma-logo3.png" alt="">
      <span class="text">Dharma-data</span>
    </a>
    <ul class="side-menu top">
      <li>
        <a href="../member-grup/index">
          <i class='bx bxs-dashboard'></i>
          <span class="text">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="../member-grup/anggota">
          <i class='bx mdi mdi-account'></i>
          <span class="text">User</span>
        </a>
      </li>
      <li class="active">
        <a href="upload">
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
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
      <div class="tengah">
        <marquee behavior="" direction="">Catatan Apabila Ada Data Tidak Tampil, Itu Berarti Admin Membatasi Hak Akses</marquee>
      </div>
      <div class="head-title">
        <div class="left">
          <h1>MY File</h1>
          <ul class="breadcrumb">
            <li>
              <a href="#">File</a>
            </li>
            <li><i class='bx bx-chevron-right'></i></li>
            <a class="btn-biru-muda" href="upload_tambah"><i class="fa-solid fa-file-circle-plus fa-bounce"></i> </a>
          </ul>
        </div>
        <a class="waktu"><?php date_default_timezone_set("Asia/makassar") . '<br>';
                          echo date("d-m-Y"); ?> <span id="watch"></span></a>
      </div>


      <div class="table-data">
        <div class="order">
          <div class="head">
            <h3>Dashboard File</h3>
            <div class="pesan-alert"><?php
                                      if (isset($_GET['pesan'])) {
                                        peringatan($_GET['pesan']);
                                      }
                                      ?></div>
            <nav style="overflow: hidden;border-radius: 20px;">
              <form action="#">
                <div class="form-input">
                  <input type="search" name="cari" placeholder="Search...">
                  <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
              </form>
            </nav>
          </div>
          <table>
            <thead>
              <tr>
                <th>No</th>
                <th>File Download</th>
                <th>Informasi File</th>
                <th>Nama Pemilik</th>
                <th>Tanggal Upload</th>
                <th>Tombol</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              if (isset($_GET['cari'])) {
                $cari = $_GET['cari'];
                $query = "SELECT tb_file.id_file,   
                                 tb_file.nama_file,
                                 tb_file.judul,
                                 tb_file.keterangan,
                                 tb_file.nama_pemilik,
                                 tb_file.tanggal
                              FROM tb_file
                              WHERE tb_file.judul LIKE '%$cari%' OR
                               tb_file.nama_pemilik LIKE '%$cari%' OR
                               tb_file.id_mhs LIKE '%$cari%'
                         ORDER BY tb_file.id_file";
              } else {
                $query = "SELECT tb_file.id_file,    
                                 tb_file.nama_file,
                                 tb_file.judul,
                                 tb_file.keterangan,
                                 tb_file.nama_pemilik,
                                 tb_file.tanggal
                             FROM tb_file
                             ORDER BY tb_file.id_file";
              }
              $data = mysqli_query($koneksi, $query);
              while ($d = mysqli_fetch_array($data)) {
              ?>
                <tr>
                  <td>
                    <?php echo $no++ ?>
                  </td>
                  <td>
                    <button class="ubah-warna"><a class="mdi mdi-file-download" href="<?= '../../file/' . $d['nama_file']; ?>" style="color:#fff">
                        <?= $d['nama_file'] ?></a>
                    </button>
                  </td>
                  <td>
                    <p><?= $d['judul'] ?></p>
                    <p><?= $d['keterangan'] ?></p>

                  </td>
                  <td>
                    <p><?= $d['nama_pemilik'] ?></p>
                  </td>
                  <td>
                    <?= $d['tanggal'] ?>
                  </td>
                  <td>
                    <a href="upload_edit?id=<?= $d['id_file'] ?>" class="btn-biru-muda2"><i class="fa-sharp fa-solid fa-file-pen"></i> Edit</a>
                    <a href="upload_hapus?id=<?= $d['id_file'] ?>" class="btn-merah tombol-hapus"><i class="fa-sharp fa-solid fa-trash"></i></a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
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