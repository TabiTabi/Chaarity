<?php
$koneksi = mysqli_connect 
			(
				"localhost",
				"root",
				"",
				"charity_login"
			);
if (mysqli_connect_errno())
	{
		echo "Koneksi Gagal"
		.mysqli_connect_error();
	}
?>
