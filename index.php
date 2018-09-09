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
	<title>BANGUNPC.COM - Rakit PC Impian dengan Mudah!</title>
	<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body>
	<div class="container">
		<div class="kepala">

			<div class="kepala-kiri">
				</a><h1><a href="index.php">BANGUNPC.COM</a></h1>
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
				<h2>Mulai Bangun PC</h2>
			</div>
			<div class="badan-atas">
				<center>
					<p>Berapa <i>Budget BangunPC</i> kamu?</p>
					<input type="text" name="input-budget" placeholder="(satuan rupiah)" size="80">
					<input type="submit" name="submit" value="Bangun Sekarang !">
				</center>
			</div>

			<div class="kepala-judul">
				<h2>Build Populer Minggu Ini</h2>
			</div>
			<div class="badan-tengah">

				<div class="obj-1">
					<img src="img\n9.jpg">
					<center><h3 style="margin-bottom: 5px;margin-top: 5px;">BUILD #1</h3></center>
					<hr/>
					<br />
					<p>
						<b>Spesifikasi :</b>
						<p>CPU : </p>
						<p>MOBO : </p>
						<p>VGA : </p>
						<p>RAM : </p>
						<p>CPU Cooler : </p>
						<p>Cooler Fan : </p>
						<p>SSD : </p>
						<p>HDD : </p>
						<p>Casing : </p>
						<p>PSU : </p>
					</p>
					<input type="text" name="input-budget" disabled value="IDR12.000.000">
					<input type="button" name="btn-beli" value="PILIH">
				</div>

				<div class="obj-1">
					<img src="img\n11.jpg">
					<center><h3 style="margin-bottom: 5px;margin-top: 5px;">BUILD #1</h3></center>
					<hr/>
					<br />
					<p>
						<b>Spesifikasi :</b>
						<p>CPU : </p>
						<p>MOBO : </p>
						<p>VGA : </p>
						<p>RAM : </p>
						<p>CPU Cooler : </p>
						<p>Cooler Fan : </p>
						<p>SSD : </p>
						<p>HDD : </p>
						<p>Casing : </p>
						<p>PSU : </p>
					</p>
					<input type="text" name="input-budget" disabled value="IDR12.000.000">
					<input type="button" name="btn-beli" value="PILIH">
				</div>

				<div class="obj-1">
					<img src="img\n10b.jpg">
					<center><h3 style="margin-bottom: 5px;margin-top: 5px;">BUILD #1</h3></center>
					<hr/>
					<br />
					<p>
						<b>Spesifikasi :</b>
						<p>CPU : </p>
						<p>MOBO : </p>
						<p>VGA : </p>
						<p>RAM : </p>
						<p>CPU Cooler : </p>
						<p>Cooler Fan : </p>
						<p>SSD : </p>
						<p>HDD : </p>
						<p>Casing : </p>
						<p>PSU : </p>
					</p>
					<input type="text" name="input-budget" disabled value="IDR12.000.000">
					<input type="button" name="btn-beli" value="PILIH">
				</div>

				<div class="obj-2">
					<img src="img\n7b.jpg">
					<center><h3 style="margin-bottom: 5px;margin-top: 5px;">BUILD #1</h3></center>
					<hr/>
					<br />
					<p>
						<b>Spesifikasi :</b>
						<p>CPU : </p>
						<p>MOBO : </p>
						<p>VGA : </p>
						<p>RAM : </p>
						<p>CPU Cooler : </p>
						<p>Cooler Fan : </p>
						<p>SSD : </p>
						<p>HDD : </p>
						<p>Casing : </p>
						<p>PSU : </p>
					</p>
					<input type="text" name="input-budget" disabled value="IDR12.000.000">
					<input type="button" name="btn-beli" value="PILIH">
				</div>

			</div>
		</div>

	</div>
	<div class="kaki">
		<p align="right"><font size="2px">Copyright : Pulau Karang Gosong - PPM 2018</font></p>
	</div>
</body>
</html>