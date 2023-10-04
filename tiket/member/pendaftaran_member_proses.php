
<?php
include '../config.php';

$nama       = $_POST['nama'];
$email      = $_POST['email'];
$tgl_lahir  = $_POST['tgl_lahir'];
$Alamat = $_POST['Alamat'];
$No_Hp = $_POST['No_Hp'];
$username = $_POST['username'];
$password = md5($_POST['password']);

if (empty($_FILES['foto']['name'])) {   //JIKA TIDAK UPLOAD FOTO
    $nama_foto   = "default.jpg";

    $query = " INSERT INTO tb_mahasiswa 
                (id_mhs,nama, email, tgl_lahir, 
                Alamat,No_Hp,username,password,foto)
            VALUES 
                ('$nama', '$email', '$tgl_lahir', 
                '$Alamat','$No_Hp','$username','$password','$nama_foto')";
    mysqli_query($koneksi, $query);
    header("location:pendaftaran_member?pesan=tambah");
} else {            //JIKA ADA FOTO YG DIUPLOAD
    $nama_foto  = $email . ".jpg";

    //PROSES UPLOAD FOTO//
    $file       = $_FILES['foto']['name'];
    $pecah      = explode('.', $file);     //MEMECAH NAMA DAN EKSTENSI FILE
    $tipe_file  = $pecah[1];               //MENGAMBIL EKSTENSI FILE
    $ekstensi = array('jpg', 'JPG', 'jpeg', 'png', 'gif');

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
        header("location:../index?pesan=tambah");
    } else {            //JIKA TIPE FILE YG DIUPLOAD TIDAK MEMENUHI PERSYARATAN
        header("location:pendaftaran_member?pesan=tipe");
    }
}


?>