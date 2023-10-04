<?php
$koneksi = mysqli_connect("localhost", "root", "", "koti-film-data");

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
} else {
    // echo "Koneksi database berhasil";
}



function peringatan($pesan)
{

    if ($pesan == "hapus") {
        echo "<div class='alert-member' role='alert' style='background-color:red;padding:5px 10px;border-radius:20px'>Data Berhasil Dihapus</div>";
    } elseif ($pesan == "edit") {
        echo "<div class='alert-member' role='alert' style='background-color:red;padding:5px 10px;border-radius:20px'>Data Berhasil Diedit</div>";
    } elseif ($pesan == "kosong") {
        echo "<div class='alert-member' role='alert'>Masih Ada Data Kosong</div>";
    } elseif ($pesan == "file") {
        echo "<div class='alert-member' role='alert'>File Berhasil Disimpan</div>";
    } elseif ($pesan == "tipe") {
        echo "<div class='alert-member' role='alert'>Tipe File Tidak Support</div>";
    } elseif ($pesan == "ukuran") {
        echo "<div class='alert-member pesan-peringatan' role='alert'>Ukuran File Max 10MB</div>";
    } elseif ($pesan == "username") {
        echo "<div class='alert-member' role='alert'>Username Sudah Dipakai!</div>";
    } elseif ($pesan == "password") {
        echo "<div class='alert-member' role='alert'>Password Tidak Sama!</div>";
    } elseif ($pesan == "tambahkan") {
        echo "<div class='alert-member' role='alert' style='background-color:green;padding:5px 10px;border-radius:20px'>Data Berhasil Ditambahkan</div>";
    } elseif ($pesan == "kode-tambah") {
        echo "<div class='alert-member' role='alert'>Kode Berhasil Disimpan</div>";
    } elseif ($pesan == "hak-akses") {
        echo "<div class='alert-member' role='alert'>Maaf Anda Tidak Memiliki Akses</div>";
    }
}

function ceklogin($pesan)
{
    if ($pesan == 'kosong') {
        echo "<div class='alert alert-danger alert-member' role='alert'>
            Username/Password Kosong!
        </div>";
    } elseif ($pesan == 'notfound') {
        echo "<div class='alert alert-danger alert-member' role='alert'>
            Username/Password Salah!
        </div>";
    } elseif ($pesan == 'login') {
        echo "<div class='alert alert-warning alert-member' role='alert'>
            Silakan Login Terlebih Dahulu, Jika Belum Punya Silahkan Daftar
        </div>";
    } elseif ($pesan == 'logout') {
        echo "<div class='alert alert-success alert-member' role='alert'>
            Anda Telah Logout
        </div>";
    } elseif ($pesan == 'berhasil') {
        echo "<div class='alert alert-success alert-member' role='alert'>
            Login Berhasil
        </div>";
    } elseif ($pesan == "tambah") {
        echo "<div class='alert alert-success d-flex align-items-center alert-member' role='alert'>Pendaftaran Berhasil, Silahkan login</div>";
    }
}

function cekSession()
{
    if (!isset($_SESSION['id'])) {
        header("location:login?pesan=login");
    }
}


function cekCookie()
{
    if (!isset($_COOKIE['id_mhs'])) {
        header("location:login?pesan=login");
    }
}
?>
<script>
    window.setTimeout(function() {
        $(".alert-member")
            .fadeTo(500, 0)
            .slideUp(500, function() {
                $(this).remove();
            });
    }, 3000);

    window.setTimeout(function() {
        $(".alert-paket3")
            .fadeTo(500, 0)
            .slideUp(500, function() {
                $(this).remove();
            });
    }, 10000);
</script>