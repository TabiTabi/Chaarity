<?php
include"koneksi.php";



$Nama = $_POST['Nama'];
$Tanggal = $_POST['Tanggal'];
$Use_donasi = $_POST['Use_donasi'];
$Catatan = $_POST['Catatan'];

$query = "insert INTO use_donasi SET
								Nama = '$Nama',
								Tanggal = '$Tanggal',
								Use_donasi = '$Use_donasi',
								Catatan = '$Catatan'
								";
mysqli_query($koneksi, $query) or die ("Gagal Perintah SQL".mysql_error());
header('location:index.php');

?>

