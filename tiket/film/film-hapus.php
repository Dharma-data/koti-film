<?php 
include '../config.php';

$id = $_GET['id'];

//MENGHAPUS FOTO
$query = "SELECT * FROM tb_film WHERE id_film = '$id'";
$data = mysqli_query($koneksi, $query);
$d = mysqli_fetch_array($data);

//SUPAYA FOTO DEFAULT TIDAK TERHAPUS
if ($d['foto'] != "default.jpg") {
    unlink('../../image/poster-film/' . $d['foto']);
}

//MENGHAPUS DATA film
$query = "DELETE FROM tb_film WHERE id_film = '$id'";
mysqli_query($koneksi, $query);

header('location:index?pesan=hapus');
?>