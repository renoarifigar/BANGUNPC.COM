<?php
	$koneksi = mysqli_connect("localhost", "root", "", "bangunpc");

	//Cek Koneksi
	if (mysqli_connect_errno()){
		echo "Koneksi ke Database Gagal T_T : " . mysqli_connect_error();
	}
	
?>