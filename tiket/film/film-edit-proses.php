<?php
include '../config.php';

$id         = $_POST['id_film'];
$judul       = $_POST['judul'];
$detail       = $_POST['detail'];
$genre      = $_POST['genre'];
$trailer      = $_POST['trailer'];
$tahun  = $_POST['tahun'];
$url = $_POST['url'];
//$prodi      = $_POST['prodi'];
//$minat      = implode(",", $_POST['minat']);

if (empty($_FILES['foto']['name'])) {       //BILA FOTO TIDAK DIGANTI
    $query      = " UPDATE tb_film
                    SET judul = '$judul',
                        detail = '$detail',  
                        genre = '$genre',
                        trailer = '$trailer',  
                        tahun = '$tahun', 
                        url   = '$url'
                    WHERE id_film = '$id'";
} else {                                    //BILA FOTO DIGANTI
    $nama_foto  = $judul . ".jpg";

    //PROSES UPLOAD FOTO BARU
    $file       = $_FILES['foto']['name'];
    $file_tmp   = $_FILES['foto']['tmp_name'];
    $pecah      = explode('.', $file);
    $tipe_file  = $pecah[1];
    $ekstensi = array('jpg', 'jpeg', 'JPG', 'png', 'gif', 'webp');
    if (in_array($tipe_file, $ekstensi)) {        //MEMBATASI TIPE FILE
        //HAPUS FOTO LAMA
        $query = "SELECT * FROM tb_film WHERE id_film = '$id'";
        $data = mysqli_query($koneksi, $query);
        $d = mysqli_fetch_array($data);
        if ($d['foto'] != "default.jpg") {      //SUPAYA FOTO DEFAULT TIDAK TERHAPUS
            unlink('../../image/poster-film/' . $d['foto']);
        }

        //UPLOAD FOTO BARU
        move_uploaded_file($file_tmp, '../../image/poster-film/' . $nama_foto);
        $query      = " UPDATE tb_film 
                        SET judul = '$judul',
                            detail = '$detail', 
                            genre = '$genre',
                            trailer = '$trailer',  
                            tahun = '$tahun',
                            url   = '$url',
                            foto = '$nama_foto'
                        WHERE id_film = '$id'";
    } else {
        header("location:film-edit?pesan=tipe&id=$id");
        die();
    }
}

mysqli_query($koneksi, $query);
header("location:index?pesan=edit");
