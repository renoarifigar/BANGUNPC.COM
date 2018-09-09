<?php
	$con=mysqli_connect("localhost","root","","bangunpc");
	if (mysqli_connect_errno()){
		echo "Tidak Terkoneksi Database";
	}

	require_once 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Masuk - BANGUNPC.COM</title>
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
					<font size="6px">Buat Akun > <b>Masuk</b> > BangunPC Idamanmu!</font>
					<p align="center"><small>(3 langkah mudah dapatkan PC Idaman)</small></p>
				</p>
			</div>

				<br/>

			<center>

				<div class="badan-atas-b" style="margin-top: 37px;margin-bottom: 37px;">			
					<p><font size="6px"><b>Masuk</b></font></p>
					<hr/>
					<p>Masuk ke akun anda untuk gunakan seluruh fitur.</p>

					<br/>
					<form method="POST">
						<p>Username</p>
						<input type="text" name="username" placeholder="username..." required>
						<p>Password</p>
						<input type="password" name="password" placeholder="******" required>
						<br/><br/>
						<input type="submit" name="masuk" value="Masuk">
					</form>
					<br/>

					<?php
						include 'koneksi.php';
						session_start();

						if(isset($_POST['masuk'])){
							$username = $_POST['username'];
							$password = $_POST['password'];

							$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
							$sql = mysqli_num_rows($query);
							$data = mysqli_fetch_array($query);

						if($sql>0){
							$_SESSION['userid'] = $data['userid'];
							$_SESSION['nama'] = $data['nama'];
							$_SESSION['username'] = $data['username'];
							$_SESSION['password'] = $data['password'];
							

						if($data['tipe']=='admin'){
							$_SESSION['admin']=$data['username'];
							?> <script type="text/javascript">window.location="admin.php";</script> <?php
							} else if($data['tipe']=='user'){
								$_SESSION['user']=$data['username'];
								?> <script type="text/javascript">window.location="index.php";</script> <?php
								} else {
								?> <script>alert("Username atau Password Salah !");</script> <?php
								}
							}
						}
					?>

					<br/><br/>
					<small>Belum punya akun? <a href="daftar.php">Daftar!</a></small>
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