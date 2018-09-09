<?php
	
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	include 'koneksi.php';

	$query = "SELECT * FROM user WHERE username='$username' AND password='$password' AND tipe='user'";
	$result=mysqli_query($query);

	if($data=mysqli_fetch_array($result))
	{
		$_SESSION['masuk'] = true;
		$_SESSION['username'] = $_POST['username'];
		header("location: index.php");
	}else if($username="" or $password="")
	{
		$_SESSION['kosong']='kosong';
		header("location: masuk.php?pesan=gagal");
	}else{
		$_SESSION['salah']='salah';
		header("location: masuk.php?pesan=gagal");
	}

?>