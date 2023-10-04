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
          <h1>User</h1>
          <ul class="breadcrumb">
            <li>
              <a href="#">User</a>
            </li>
            <li><i class='bx bx-chevron-right'></i></li>
            <?php if ($_SESSION['level'] == 'admin') {
            ?>
              <a class="btn-biru-muda" href="pendaftaran"><i class="fa-sharp fa-solid fa-user-plus fa-bounce" style="margin: 0px 0px 0px 2px;"></i></a>
            <?php } ?>
          </ul>
        </div>
        <a class="waktu"><?php date_default_timezone_set("Asia/makassar") . '<br>';
                          echo date("d-m-Y"); ?> <span id="watch"></span></a>
      </div>


      <div class="table-data">
        <div class="order">
          <div class="head">
            <h3>Dashboard User</h3>
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
                <th>Member</th>
                <th>Informasi</th>
                <th>Tombol</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              if (isset($_GET['cari'])) {
                $cari = $_GET['cari'];
                $query = "SELECT tb_mahasiswa.id_mhs,   
                                 tb_mahasiswa.foto,
                                 tb_mahasiswa.nama,
                                 tb_mahasiswa.email,
                                 tb_mahasiswa.tgl_lahir,
                                 tb_mahasiswa.Alamat,
                                 tb_mahasiswa.No_Hp
                              FROM tb_mahasiswa 
                              WHERE tb_mahasiswa.nama LIKE '%$cari%' OR
                               tb_mahasiswa.email LIKE '%$cari%'
                         ORDER BY tb_mahasiswa.id_mhs";
              } else {
                $query = "SELECT tb_mahasiswa.id_mhs,    
                                 tb_mahasiswa.foto,
                                 tb_mahasiswa.nama,
                                 tb_mahasiswa.email,
                                 tb_mahasiswa.tgl_lahir,
                                 tb_mahasiswa.Alamat,
                                 tb_mahasiswa.No_Hp
                             FROM tb_mahasiswa
                             ORDER BY tb_mahasiswa.id_mhs";
              }
              $data = mysqli_query($koneksi, $query);
              while ($kolom = mysqli_fetch_array($data)) {
              ?>
                <tr>
                  <td>
                    <?php echo $no++ ?><?= $kolom['id_mhs']; ?>
                  </td>
                  <td>
                    <a href="<?= '../../image/foto-anggota/' . $kolom['foto'] ?>" target="_blank">
                      <img class="pencet" src="<?= '../../image/foto-anggota/' . $kolom['foto'] ?>" alt="" width="100">
                    </a>
                    <p><?= $kolom['nama'] ?></p>
                    <p><?= $kolom['email'] ?></p>
                  </td>
                  <?php if ($_SESSION['level'] == 'admin') { ?>
                    <td><?= date('d F Y', strtotime($kolom['tgl_lahir'])) ?>
                      <p><?= $kolom['Alamat'] ?></p>
                      <p><?= $kolom['No_Hp'] ?></p>
                    </td>
                  <?php } ?>
                  <td>
                    <?php if ($_SESSION['level'] == 'admin') { ?>
                      <span>
                        <a href="anggota_edit?id=<?= $kolom['id_mhs'] ?>" class="btn-biru-muda2"><i class="fa-sharp fa-solid fa-user-pen"></i> Edit</a>
                        <a href="anggota_hapus?id=<?= $kolom['id_mhs'] ?>" class="btn-merah tombol-hapus"><i class="fa-sharp fa-solid fa-trash"></i> </a>
                      </span>
                    <?php } ?>
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
  <!-- <script>
    $('.tombol-hapus').on('click', function(e) {
      e.preventDefault();
      const href = $(this).attr('href');

      Swal.fire({
        title: 'Yakin Ingin',
        text: "Hapus Data ? ",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus Data'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
          document.location.href = href;
        }
      })
    });
  </script> -->
  <script src="../../dist/js/script.js"></script>
  <script src="../js/script.js"></script>
  <script src="../../js/jquery-3.6.4.min.js"></script>
  <script src="../../dist/style.js"></script>
</body>

</html>