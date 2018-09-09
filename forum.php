<?php
	session_start();
	$con=mysqli_connect("localhost","root","","bangunpc");
	if (mysqli_connect_errno()){
		echo "Tidak Terkoneksi Database";
	}

	require_once 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Forum - BANGUNPC.COM</title>
</head>
<body>
	<div class="container">

		<div class="kepala">

			<div class="kepala-kiri">
				</a><h1><a href="index.php">BANGUNPC.COM</a></h1>
				<link rel="stylesheet" type="text/css" href="css\style.css">
			</div>

			<div class="kepala-kanan">
				<div class="menu-kanan">
				<ul>
					<a href="forum.php"><li>Forum</li></a>

					<?php
						if(isset($_SESSION['user'])){
							?>
							<a href="#"><li><?php echo $_SESSION['nama']; ?></li></a>
							<a href="keluar.php"><li>Keluar</li></a>
							<?php
						} else if(isset($_SESSION['admin'])){
							?>
							<a href="#"><li>ADMIN <?php echo $_SESSION['nama']; ?></li></a>
							<a href="keluar.php"><li>Keluar</li></a>
							<?php 
						} else {
							?>
							<a href="masuk.php"><li>Login</li></a>
							<a href="daftar.php"><li>Register</li></a>
						<?php } 
					?>
				</ul>
				</div>
			</div>

		</div>

		<div class="badan">

			<div class="kepala-judul">
				<h2>Peraturan</h2>
			</div>
			<div class="badan-atas">
				<p>Berikut beberapa aturan yang perlu kamu ikuti di forum ini :</p>
				<p>
					<p>- Hargai pendapat user lain</p>
					<p>- Diskusi dengan baik dan sopan</p>
					<p>- No Politik, Blame, SARA, Pornografi, Narkoba, dsb</p>
				</p>
			</div>

			<div class="kepala-judul">
				<h2>Diskusi</h2>
			</div>
			<div class="badan-tengah-b">
				
				<div class="obj-diskusi">
					<img src="img\n9.jpg">
					<a href="#"><h3>Build PC Multimedia Budget 10JT!</h3></a>
					<p>by <a href="#">Budianto78</a></p>
					<hr/>
					<small>Reply : 10 | Likes : 35 | Date : 28/08/2018</small>
				</div>

				<div class="obj-diskusi">
					<img src="img\n11.jpg">
					<a href="#"><h3>Build PC Multimedia Budget 12JT (Pheriperal Lengkap)!</h3></a>
					<p>by <a href="#">Ahmad_48</a></p>
					<hr/>
					<small>Reply : 35 | Likes : 24 | Date : 31/08/2018</small>
				</div>

				<div class="obj-diskusi">
					<img src="img\n10b.jpg">
					<a href="#"><h3>Build PC Gaming Budget 14JT (PUBG HIGH LanJay)!</h3></a>
					<p>by <a href="#">GamerKosan_ID</a></p>
					<hr/>
					<small>Reply : 104 | Likes : 350 | Date : 04/09/2018</small>
				</div>

				<div class="obj-diskusi">
					<img src="img\n7b.jpg">
					<a href="#"><h3>Build PC Kantor/Office Budget 10JT (Lengkap)!</h3></a>
					<p>by <a href="#">PakJhoni744</a></p>
					<hr/>
					<small>Reply : 10 | Likes : 60 | Date : 07/09/2018</small>
				</div>

				<div class="obj-diskusi">
					<img src="img\n10b.jpg">
					<a href="#"><h3>Build PC Gaming Budget 14JT (PUBG HIGH LanJay)!</h3></a>
					<p>by <a href="#">GamerKosan_ID</a></p>
					<hr/>
					<small>Reply : 277 | Likes : 1K | Date : 04/09/2018</small>
				</div>

				<div class="obj-diskusi">
					<img src="img\n9.jpg">
					<a href="#"><h3>Build PC Multimedia Budget 5JT!</h3></a>
					<p>by <a href="#">Budianto78</a></p>
					<hr/>
					<small>Reply : 5 | Likes : 2 | Date : 28/08/2018</small>
				</div>
				
			</div>
			<div class="menu-kaki" style="text-align: right;">
				<input type="button" name="buat-diskusi" value="+ Buat Diskusi">
				<input type="button" name="buat-diskusi" value="Diskusi Saya">
			</div>
		</div>

	</div>

	<div class="kaki">
		<p align="right"><font size="2px">Copyright : Pulau Karang Gosong - PPM 2018</font></p>
	</div>
</body>
</html>