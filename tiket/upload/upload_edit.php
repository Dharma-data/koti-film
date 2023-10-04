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
      <li class="">
        <a href="../member-grup/index">
          <i class='bx bxs-dashboard'></i>
          <span class="text">Dashboard</span>
        </a>
      </li>
      <li class="">
        <a href="../member-grup/anggota">
          <i class='bx mdi mdi-account'></i>
          <span class="text">User</span>
        </a>
      </li>
      <li class="active">
        <a href="../upload/upload">
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
        <marquee behavior="" direction="">Catatan Apabila Ada Data Tidak Tampil, Itu Berarti Admin Membatasi Hak Akses</marquee>
        <form action="#">
          <!-- <div class="form-input">
            <input type="search" placeholder="Search...">
            <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
          </div> -->
        </form>
        <span><?= $_SESSION['username']; ?></span>
        <a href="../../image/dharma1.webp" class="profile">
          <img src="<?= '../../image/foto-anggota/' . $_SESSION['foto'] ?>" alt="">
        </a>
      </nav>
    <?php } ?>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
      <div class="head-title">
        <div class="left">
          <h1>MY File</h1>
          <ul class="breadcrumb">
            <li>
              <a class="active" href="upload">File</a>
            </li>
            <li><i class='bx bx-chevron-right'></i></li>
            <li>
              <a class="" href="#">Edit File</a>
            </li>
          </ul>
        </div>
        <a class="waktu"><?php date_default_timezone_set("Asia/makassar") . '<br>';
                          echo date("d-m-Y"); ?> <span id="watch"></span></a>
      </div>


      <div class="table-data">
        <div class="order">
          <div class="head">
            <h3>Edit File</h3>
          </div>
          <div class="konten">
            <div class="kepala">
              <div class="lock"></div>
              <h2 class="judul" style="margin-left: 40px;">Form Data File</h2>
            </div>
            <div style="margin: 15px 35px 10px;"><i class="bi bi-shield-fill-exclamation"></i> Kode Mhs Dapat dilihat Di Halaman User</div>
            <div class="artikel">
              <?php
              $id = $_GET['id'];
              $query = "SELECT * FROM tb_file WHERE id_file = $id";
              $data = mysqli_query($koneksi, $query);
              $d = mysqli_fetch_array($data);
              ?>
              <form class="horizontal" action="upload_edit_proses" method="POST" enctype="multipart/form-data">
                <fieldset>
                  <legend>Data File</legend>
                  <div class="grup">
                    <label for="id_mhs">Kode mhs<span class="required">*</span></label>
                    <input type="text" name="id_mhs" required placeholder="Masukkan id_mhs Anda" value="<?= $d['id_mhs'] ?>" readonly="readonly">
                  </div>
                  <div class="grup">
                    <label for="Nama-File">Nama File<span class="required">*</span></label>
                    <input type="text" name="judul" required placeholder="Masukkan Nama File Anda" value="<?= $d['judul'] ?>">
                  </div>
                </fieldset>
                <fieldset>
                  <legend>Informasi File</legend>
                  <div class="grup">
                    <label for="keterangan">Keterangan<span class="required">*</span></label>
                    <textarea type="text" name="keterangan" required placeholder="Masukkan keterangan Anda"><?php echo $d['keterangan'] ?></textarea>
                  </div>
                  <div class="grup">
                    <label for="nama_pemilik">Nama Pemilik<span class="required">*</span></label>
                    <input type="text" name="nama_pemilik" required placeholder="Masukkan Nama Anda" value="<?= $d['nama_pemilik'] ?>">
                  </div>
                  <div class="grup">
                    <label for="tanggal-lahir">Tanggal Upload<span class="required">*</span></label>
                    <input type="date" name="tanggal" pattern="Tanggal/Bulan/Tahun" required placeholder=" Masukkan Tanggal" value="<?= $d['tanggal']; ?>">
                  </div>
                  <div class="grup">
                    <label for="tanggal-lahir">File :<a target="_blank" href="<?= '../../file/' . $d['nama_file']; ?>">
                        <?= $d['nama_file'] ?></a></label>
                    <input type="file" name="file">
                  </div>
                  <button type="submit" value="Simpan" class="btn-biru-muda1"> Simpan</button>
                  <input type="hidden" name="id_file" value="<?= $d['id_file'] ?>">
                  <input type="reset" value="Reset" class="btn-grey">
                </fieldset>
                <div class="footer">
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