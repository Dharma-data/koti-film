<?php 
// Membuat koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DBKomentar";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Cek koneksi
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Menyimpan data ke database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST["nama"];
  $email = $_POST["email"];
  $komentar = $_POST["komentar"];

  $sql = "INSERT INTO myguests (nama, email, komentar)
VALUES ('$nama', '$email', '$komentar')";

  if (mysqli_query($conn, $sql)) {
    // echo "<h3>Komentar Anda:</h3>";
    // echo "Nama: " . $nama . "<br>";
    // echo "Email: " . $email . "<br>";
    // echo "Komentar: " . $komentar;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
