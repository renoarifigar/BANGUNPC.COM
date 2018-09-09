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
	<title>Daftar - BANGUNPC.COM</title>
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
			<div class="badan-atas">
				<p align="center">
					<font size="6px"><b>Buat Akun</b> > Masuk > BangunPC Idamanmu!</font>
					<p align="center"><small>(3 langkah mudah dapatkan PC Idaman)</small></p>
				</p>
			</div>

				<br/>

			<center>	

				<div class="badan-atas-b" style="margin-top: 24px;margin-bottom: 24px;">			
					<p><font size="6px"><b>Buat Akun</b></font></p>
					<hr/>
					<p>Masuk ke akun anda untuk gunakan seluruh fitur.</p>
					<br/>
					<form method="POST">
						<p>Nama</p>
						<input type="text" name="nama" placeholder="nama lengkap..." required>
						<p>Username</p>
						<input type="text" name="username" placeholder="username..." required>
						<p>Password</p>
						<input type="password" name="password" placeholder="******" required>
						<br/><br/>
						<input type="submit" name="submit" value="Daftar">
					</form>

					<br/>
					<small>Sudah punya akun? <a href="daftar.php">Masuk!</a></small>
					<hr/>
					<p><small>BANGUNPC Security System™</small></p>
				</div>
			</center>
		</div>

	</div>
	<div class="kaki">
		<p align="right"><font size="2px">Copyright : Pulau Karang Gosong - PPM 2018</font></p>
	</div>
</body>
</html>

<?php
		if(isset($_POST["submit"])){
		$nama = $_POST["nama"];
		$username = $_POST["username"];
		$password = $_POST["password"];
		

		if(!empty($nama) || !empty($username) || !empty($password)){
			$query = mysqli_query($koneksi, "INSERT INTO user VALUES('userid', '$nama', '$username', '$password', 'user')");

			if($query){
				?> <script>alert("Daftar Akun Sukses ! Silahkan Login..."); window.location="masuk.php";</script><?php
			}
		}
	}
?>