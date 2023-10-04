<?php
include '../config.php';
session_start();
cekSession();
cekCookie();

$id             = $_POST['id_file'];
$id_mhs         = $_POST['id_mhs'];
$judul          = $_POST['judul'];
$keterangan     = $_POST['keterangan'];
$nama_pemilik     = $_POST['nama_pemilik'];
$tanggal     = $_POST['tanggal'];
$file           = $_FILES['file']['name'];
$ukuran         = $_FILES['file']['size'];  //UKURAN FILE
$file_tmp       = $_FILES['file']['tmp_name'];
$pecah          = explode('.', $file);    //MEMECAH NAMA DAN EKSTENSI FILE
$tipe_file      = $pecah[1];        //MENGAMBIL EKSTENSI FILE

if (empty($judul)) {                //JUDUL TIDAK BOLEH KOSONG
    header("location:upload_edit?pesan=kosong&id='$id'");
    die();
} else {
    if (empty($file)) {             //JIKA HANYA EDIT DATA TANPA UBAH FILE
        $query = "  UPDATE tb_file
                    SET 
                        id_mhs = '$id_mhs',
                        judul =  '$judul', 
                        keterangan = '$keterangan',
                        nama_pemilik = '$nama_pemilik',
                        tanggal = '$tanggal'
                    WHERE id_file = '$id'";
    } else {                        //JIKA UPLOAD FILE BARU
        if ($ukuran > 100000000 || $ukuran == 0) {
            header("location:upload_edit?pesan=ukuran&id=$id");
            die();
        } else {
            //MENGHAPUS FILE LAMA
            $query_file = "SELECT * FROM tb_file WHERE id_file = '$id'";
            $data_file = mysqli_query($koneksi, $query_file);
            $d_file = mysqli_fetch_array($data_file);
            unlink('../../file/' . $d_file['nama_file']);

            //UPLOAD FILE BARU
            $nama_file  = round(microtime(true)) . "." . $tipe_file;
            move_uploaded_file($file_tmp, '../../file/' . $nama_file);
            $query = "  UPDATE tb_file
                        SET nama_file = '$nama_file', 
                        id_mhs = '$id_mhs',
                        judul =  '$judul', 
                        keterangan = '$keterangan',
                        nama_pemilik = '$nama_pemilik',
                        tanggal = '$tanggal'
                        WHERE id_file = '$id'";
        }
    }
    mysqli_query($koneksi, $query);
    header("location:upload?pesan=edit");
}
