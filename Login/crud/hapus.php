<?php
include"koneksi.php";


$query = "DELETE FROM donasi 
							WHERE Nama ='$_GET[id]'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:index.php');

?>

