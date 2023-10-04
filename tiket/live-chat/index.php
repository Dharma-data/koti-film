<?php
include '../../koneksi.php';
error_reporting(0);
session_start();
cekSession();
cekCookie();
function loginForm()
{
	echo '
		<div class="jarak">
			<form action="index" method="post">
			<div class="form-input">
				<label for="name">Please Enter Your Name To Continue</label>
				<input type="text" name="name" id="name" class="" readonly="readonly" placeholder="Enter Your Name" value="' . $_SESSION['username'] . '" style="border-radius:20px;padding:5px;text-align:center" />
				<input class="btn-biru-muda" type="submit" name="enter" id="enter" value="Enter" />
				</div>
			</form>
		</div>
   ';
}

if (isset($_POST['enter'])) {
	if ($_POST['name'] != "") {
		$_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
		$cb = fopen("log.html", 'a');
		fwrite($cb, "<div class='msgln'><i>User <b>" . $_SESSION['name'] . "</b> Telah Bergabung Ke Chat</i><br></div>");
		fclose($cb);
	} else {
		echo '<span class="error">Please Enter a Name</span>';
	}
}

if (isset($_GET['logout'])) {
	$cb = fopen("log.html", 'a');
	fwrite($cb, "<div class='msgln'><i>User <b>" . $_SESSION['name'] . "</b> telah Keluar Dari Chat.</i><br></div>");
	fclose($cb);
	// session_destroy ();
	header("Location: ./");
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Dharma-Data Live Chat </title>
	<link rel="shortcut icon" href="../../image/logo/dharma-logo3.png" type="image/x-icon">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/style-alert.css">
	<link rel="stylesheet" href="../../fonts/font-icon-bootstrap/bootstrap-icons.css">
	<link rel="stylesheet" href="../../vendor/fontawsome-icons/css/all.min.css">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">
	<script src="../../js/jquery-3.6.4.min.js"></script>
</head>
<!--
		*******************************************************************************

		I M P O R T A N T -- N O T I C E
		- - - - - - - - -    - - - - - -

		created by MUhammad Abba Gana

		Do NOT copy and paste this code from a web browser "View Source" Window.

		The actual code contains server-side function calls which do not appear in a
		"View Source" situation even copy cannot work!!

		Please refer to the supplied templates on the product CD.
		
			for more contact me on the following details;

			email address: abbagana79@gmail.com
			phone number: +2349039016969
			website:www.Guidetricks.blogspot.com

		*******************************************************************************
	-->

<body onload="startTime()"></body>
<section id="sidebar">
	<a href="#" class="brand">
		<img src="../../image/logo/dharma-logo3.png" alt="">
		<span class="text">Dharma-data</span>
	</a>
	<ul class="side-menu top">
		<li class="">
			<a href="../member-grup/index">
				<i class='bx bxs-dashboard'></i>
				<span class="text">Dashboard</span>
			</a>
		</li>
		<li>
			<a href="../member-grup/anggota">
				<i class='bx mdi mdi-account'></i>
				<span class="text">User</span>
			</a>
		</li>
		<li>
			<a href="../upload/upload">
				<i class='bx mdi mdi-folder-download'></i>
				<span class="text">File</span>
			</a>
		</li>
		<li class="active">
			<a href="../live-chat/">
				<i class='bx bxs-message-dots'></i>
				<span class="text">Chat</span>
			</a>
		</li>
		<li>
			<a href="#">
				<i class='bx bxs-group'></i>
				<span class="text">Team</span>
			</a>
		</li>
	</ul>
	<ul class="side-menu top">
		<li>
			<a href="#">
				<i class='bx bxs-cog'></i>
				<span class="text">Settings</span>
			</a>
		</li>
		<li>
			<a href="../logout" class="logout">
				<i class='bx mdi mdi-logout'></i>
				<span class="text">Logout</span>
			</a>
		</li>
	</ul>
</section>
<section id="content">
	<!-- NAVBAR -->
	<nav>
		<i class='bx bx-menu'></i>
		<form action="#">
			<!-- <div class="form-input">
            <input type="search" placeholder="Search...">
            <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
          </div> -->
		</form>
		<span><?= $_SESSION['username']; ?></span>
		<a href="<?= '../../image/foto-anggota/' . $_SESSION['foto'] ?>" class="profile">
			<img src="<?= '../../image/foto-anggota/' . $_SESSION['foto'] ?>" alt="">
		</a>
	</nav>
	<!-- NAVBAR -->

	<!-- MAIN -->
	<main>
		<div class="tengah">
			<marquee behavior="" direction="">Catatan Apabila Ada Data Tidak Tampil, Itu Berarti Admin Membatasi Hak Akses</marquee>
		</div>
		<div class="head-title">
			<div class="left">
				<h1>MY Chat</h1>
				<ul class="breadcrumb">
					<li>
						<a href="#">Chat</a>
					</li>
				</ul>
			</div>
			<a class="waktu"><?php date_default_timezone_set("Asia/makassar") . '<br>';
												echo date("d-m-Y"); ?> <span id="watch"></span></a>
		</div>


		<div class="table-data">
			<div class="order">
				<div class="head">
					<h1><i class="fa-solid fa-comments fa-bounce"></i> Live Chat!</h1>
					<hr />
				</div>
				<?php
				if (!isset($_SESSION['name'])) {
					loginForm();
				} else {
				?>
					<div id="wrapper">
						<div id="menu">
							<p class="welcome"><b>HI - <a href="<?= '../../image/foto-anggota/' . $_SESSION['foto'] ?>" class="profile"><img style="width:30px;height:30px;border-radius: 50px;object-fit: cover;" src="<?= '../../image/foto-anggota/' . $_SESSION['foto'] ?>" alt=""></a> <?php echo $_SESSION['name']; ?></b></p>
							<p class="logout"><a id="exit" href="#" class="btn btn-default">Exit Live Chat</a></p>
							<div style="clear: both"></div>
						</div>
						<div id="chatbox">
							<?php
							if (file_exists("log.html") && filesize("log.html") > 0) {
								$handle = fopen("log.html", "r");
								$contents = fread($handle, filesize("log.html"));
								fclose($handle);

								echo $contents;
							}
							?>
						</div>
						<form name="message" action="">
							<input name="usermsg" type="text" id="usermsg" placeholder="Create A Message" style="width:175px;padding: 5px;border-radius: 20px;" />
							<input class="btn-biru-muda" name="submitmsg" type="submit" id="submitmsg" value="Kirim" />
						</form>
					</div>
					<script type="text/javascript">
						$(document).ready(function() {});
						$(document).ready(function() {
							$("#exit").click(function() {
								var exit = confirm("Are You Sure You Want To Leave This Page?");
								if (exit == true) {
									window.location = 'index.php?logout=true';
								}
							});
						});
						$("#submitmsg").click(function() {
							var clientmsg = $("#usermsg").val();
							$.post("post.php", {
								text: clientmsg
							});
							$("#usermsg").attr("value", "");
							loadLog;
							return false;
						});

						function loadLog() {
							var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
							$.ajax({
								url: "log.html",
								cache: false,
								success: function(html) {
									$("#chatbox").html(html);
									var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
									if (newscrollHeight > oldscrollHeight) {
										$("#chatbox").animate({
											scrollTop: newscrollHeight
										}, 'normal');
									}
								},
							});
						}
						setInterval(loadLog, 2500);
					</script>
				<?php
				}
				?>
			</div>
		</div>
	</main>
	<!-- MAIN -->
</section>

<script src="../../dist/js/script.js"></script>
<script src="../js/script.js"></script>
<script src="../../dist/style.js"></script>
</body>

</html>