<?php
include"koneksi.php";



$Nama = $_POST['Nama'];
$Tanggal = $_POST['Tanggal'];
$Jumlah_donasi = $_POST['Jumlah_donasi'];
$Catatan = $_POST['Catatan'];

$query = "insert INTO donasi SET
								Nama = '$Nama',
								Tanggal = '$Tanggal',
								Jumlah_donasi = '$Jumlah_donasi',
								Catatan = '$Catatan'
								";
mysqli_query($koneksi, $query) or die ("Gagal Perintah SQL".mysql_error());
header('location:index.php');

?>

