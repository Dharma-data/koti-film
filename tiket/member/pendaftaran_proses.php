<?php
include '../config.php';

$id         = md5($_POST['id_mhs']);
$nama       = $_POST['nama'];
$email      = $_POST['email'];
$tgl_lahir  = $_POST['tgl_lahir'];
$Alamat = $_POST['Alamat'];
$No_Hp = $_POST['No_Hp'];
$username = $_POST['username'];
$password = md5($_POST['password']);

//$prodi      = $_POST['prodi'];
//$minat      = implode(",", $_POST['minat']);

// $query = "INSERT INTO tb_mahasiswa (nama, email, tgl_lahir, jenis_kelamin, prodi, minat)
//             VALUES ('$nama', '$email', '$tgl_lahir', '$jenis_kelamin', '$prodi', '$minat')";
// mysqli_query($koneksi, $query);

// header("location:mahasiswa.php");

if (empty($_FILES['foto']['name'])) {   //JIKA TIDAK UPLOAD FOTO
    $nama_foto   = "default.jpg";

    $query = " INSERT INTO tb_mahasiswa 
                (nama, email, tgl_lahir, 
                Alamat,No_Hp,username,password,foto)
            VALUES 
                ('$nama', '$email', '$tgl_lahir', 
                '$Alamat','$No_Hp','$username','$password','$nama_foto')";
    mysqli_query($koneksi, $query);
    header("location:anggota");
} else {            //JIKA ADA FOTO YG DIUPLOAD
    $nama_foto  = $email . ".jpg";

    //PROSES UPLOAD FOTO//
    $file       = $_FILES['foto']['name'];
    $pecah      = explode('.', $file);     //MEMECAH NAMA DAN EKSTENSI FILE
    $tipe_file  = $pecah[1];               //MENGAMBIL EKSTENSI FILE
    $ekstensi = array('jpg', 'JPG', 'png', 'gif', 'webp');

    if (in_array($tipe_file, $ekstensi)) { //MEMBATASI TIPE FILE YANG BOLEH DIUPLOAD
        $file_tmp   = $_FILES['foto']['tmp_name'];
        move_uploaded_file($file_tmp, '../../image/foto-anggota/' . $nama_foto);
        $query = " INSERT INTO tb_mahasiswa 
                    (nama, email, tgl_lahir, 
                    Alamat,No_Hp,username,password, foto)
                VALUES 
                    ('$nama', '$email', '$tgl_lahir', 
                    '$Alamat','$No_Hp', '$username','$password','$nama_foto')";
        mysqli_query($koneksi, $query);
        header("location:anggota?pesan=tambahkan");
    } else {            //JIKA TIPE FILE YG DIUPLOAD TIDAK MEMENUHI PERSYARATAN
        header("location:pendaftaran?pesan=kosong");
    }
}
