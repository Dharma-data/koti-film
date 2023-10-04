<?php 
include '../config.php';

$id = $_GET['id'];

//MENGHAPUS FOTO
$query = "SELECT * FROM tb_mahasiswa WHERE id_mhs = '$id'";
$data = mysqli_query($koneksi, $query);
$d = mysqli_fetch_array($data);

//SUPAYA FOTO DEFAULT TIDAK TERHAPUS
if ($d['foto'] != "default.jpg") {
    unlink('../../image/foto-anggota/' . $d['foto']);
}

//MENGHAPUS DATA MAHASISWA
$query = "DELETE FROM tb_mahasiswa WHERE id_mhs = '$id'";
mysqli_query($koneksi, $query);

header('location:anggota?pesan=hapus');
?>