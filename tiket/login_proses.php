<?php
session_start();
@ob_start();
include 'config.php';

$username   = $_POST['username'];
$password   = md5($_POST['password']);

if (empty($username && $password)) {
    header("location:index?pesan=kosong");
} else {
    $query = "  SELECT * FROM tb_mahasiswa
                WHERE username='$username' AND password='$password'";
    $data = mysqli_query($koneksi, $query);
    $d = mysqli_fetch_array($data);
    $cek = (mysqli_num_rows($data) === 0) ;
    if ($cek > 0) {
        $_SESSION = array(                     //SET SESSION
            'id'            => $d['id_mhs'], $d['id_file'],
            'username'      => $d['username'],
            'level'         => $d['level'],
            'nama_pemilik'  => $d['nama_pemilik'],
            'id_file'       => $d['id_mhs'],
            'foto'          => $d['foto'],
        );

        $expire = time() + 60 * 60;            //SET COOKIE
        setcookie("id_mhs", $d['id_mhs'], $expire, '/');

        header("location:film/index?pesan=berhasil");
    } else {
        header("location:index?pesan=notfound");
    }
}
