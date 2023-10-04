<?php include 'input_komentar.php' ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>KOTI-FILM | Komentar</title>
  <link rel="shortcut icon" href="../../image/kotikop.webp" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../vendor/fontawsome-icons/css/all.min.css">
  <link rel="stylesheet" href="../../vendor/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../dist/style.css">
</head>

<style>
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  p {
    color: white;
  }

  @media only screen and (max-width:576px) {
    .chat-card{
      width: 300px !important;
    }
  }
</style>

<body>
  <?php include 'navbar.php' ?>

  <section style="background: linear-gradient(darkred,#212529); padding: 10rem 0rem;">
    <div class="container">
      <div class="card mx-auto chat-card" style="background: transparent;border: none;width: 500px;">
        <div class="text-center mb-3">
          <h2>Komentar</h2>
        </div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <div class="input-group mb-3">
            <div class="row mx-auto">
              <!-- <span class="required"></span> -->
              <input type="text" class="form-control" required placeholder="Nama" aria-label="Username" id="nama" name="nama">
              <input type="text" class="form-control my-3" required placeholder="Email" aria-label="Server" id="email" name="email">
              <div class="input-group mb-3">
                <textarea class="form-control" required placeholder="Komentar" aria-label="With textarea" id="komentar" name="komentar"></textarea>
              </div>
              <input class="mx-auto my-3 btn btn-danger" type="submit" value="Submit" style="width: 100px;">
            </div>
          </div>
        </form>
      </div>
      <!-- Form Komentar -->

      <?php
      // Menampilkan data dari database
      $sql = "SELECT * FROM MyGuests";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<h3>Komentar</h3>";
          echo "<h6>Nama : " .  '<i style="color:red">' . $row["nama"] . '</i>' . "<br></h6>";
          // echo "Email: " . $row["lastname"] . "<br>";
          echo "<p>Pesan : " . $row["komentar"] . "<br><hr></p>";
        }
      } else {
        echo "<h5>0 Komentar</h5>";
      }

      mysqli_close($conn);
      ?>


    </div>
  </section>

  <?php include 'footer.php' ?>

  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../dist/style.js"></script>
</body>

</html>