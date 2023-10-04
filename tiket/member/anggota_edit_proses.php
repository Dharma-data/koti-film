<?php
include '../config.php';

$id         = $_POST['id_mhs'];
$nama       = $_POST['nama'];
$email      = $_POST['email'];
$tgl_lahir  = $_POST['tgl_lahir'];
$Alamat = $_POST['Alamat'];
$No_Hp = $_POST['No_Hp'];
$username = $_POST['username'];
$password = md5($_POST['password']);
//$prodi      = $_POST['prodi'];
//$minat      = implode(",", $_POST['minat']);

if (empty($_FILES['foto']['name'])) {       //BILA FOTO TIDAK DIGANTI
    $query      = " UPDATE tb_mahasiswa 
                    SET nama = '$nama', 
                        email = '$email', 
                        tgl_lahir = '$tgl_lahir', 
                        Alamat='$Alamat',
                        No_Hp='$No_Hp',
                        username='$username',
                        password='$password'
                    WHERE id_mhs = '$id'";
} else {                                    //BILA FOTO DIGANTI
    $nama_foto  = $email . ".jpg";

    //PROSES UPLOAD FOTO BARU
    $file       = $_FILES['foto']['name'];
    $file_tmp   = $_FILES['foto']['tmp_name'];
    $pecah      = explode('.', $file);
    $tipe_file  = $pecah[1];
    $ekstensi = array('jpg', 'jpeg', 'JPG', 'png', 'gif');
    if (in_array($tipe_file, $ekstensi)) {        //MEMBATASI TIPE FILE
        //HAPUS FOTO LAMA
        $query = "SELECT * FROM tb_mahasiswa WHERE id_mhs = '$id'";
        $data = mysqli_query($koneksi, $query);
        $d = mysqli_fetch_array($data);
        if ($d['foto'] != "default.jpg") {      //SUPAYA FOTO DEFAULT TIDAK TERHAPUS
            unlink('../../image/foto-anggota/' . $d['foto']);
        }

        //UPLOAD FOTO BARU
        move_uploaded_file($file_tmp, '../../image/foto-anggota/' . $nama_foto);
        $query      = " UPDATE tb_mahasiswa 
                        SET nama = '$nama', 
                            email = '$email', 
                            tgl_lahir = '$tgl_lahir', 
                            Alamat='$Alamat',
                            No_Hp='$No_Hp', 
                            username='$username',
                            foto = '$nama_foto'
                        WHERE id_mhs = '$id'";
    } else {
        header("location:anggota_edit?pesan=tipe&id=$id");
        die();
    }
}

mysqli_query($koneksi, $query);
header("location:anggota?pesan=edit");

