<?php
include '../config.php';
session_start();
cekSession();
cekCookie();

$id    = $_GET['id'];

//MENGHAPUS FILE DARI FOLDER
$query = "SELECT * FROM tb_file WHERE id_file = '$id'";
$data = mysqli_query($koneksi, $query);
$d = mysqli_fetch_array($data);
unlink('../../file/' . $d['nama_file']);

//MENGHAPUS DATA
$query = "DELETE FROM tb_file WHERE id_file = '$id'";
mysqli_query($koneksi, $query);

//MENGALIHKAN KE HALAMAN LAIN SETELAH PROSES HAPUS BERHASIL
header("location:upload?pesan=hapus");
