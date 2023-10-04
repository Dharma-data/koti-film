<?php
include 'config.php';
session_start();

//hapus dan destroy session
session_unset(); 
session_destroy();

//hapus cookies
setcookie("id_mhs", "", 0, '/');

header("location:index?pesan=logout");

