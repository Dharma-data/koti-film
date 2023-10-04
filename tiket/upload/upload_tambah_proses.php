<?php
include '../config.php';
session_start();
cekSession();
cekCookie();

$id_mhs         = $_POST['id_mhs'];
$judul          = $_POST['judul'];
$keterangan     = $_POST['keterangan'];
$nama_pemilik     = $_POST['nama_pemilik'];
$tanggal    = $_POST['tanggal'];
$file           = $_FILES['file']['name'];
$ukuran         = $_FILES['file']['size'];  //UKURAN FILE
$file_tmp       = $_FILES['file']['tmp_name'];
$pecah          = explode('.', $file);    //MEMECAH NAMA DAN EKSTENSI FILE
$tipe_file      = $pecah[1];         //MENGAMBIL EKSTENSI FILE

if (empty($judul && $file)) {
    header("location:upload_tambah?pesan=kosong&u=$ukuran");
    die();
} else {
    // MEMBATASI UKURAN FILE 4MB
    if ($ukuran > 10000000 || $ukuran == 0) {
        header("location:upload_tambah?pesan=ukuran&u=$ukuran");
        die();
    } else {
        $nama_file  = round(microtime(true)) . "." . $tipe_file;
        //123123734.png

        move_uploaded_file($file_tmp, '../../file/' . $nama_file);
        $query = "  INSERT INTO tb_file(id_mhs, nama_file, judul, keterangan, nama_pemilik,tanggal)
                    VALUES('$id_mhs','$nama_file', '$judul', '$keterangan','$nama_pemilik','$tanggal')";
        mysqli_query($koneksi, $query);
        header("location:upload?pesan=file&u=$ukuran");
    }
}
