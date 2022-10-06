<?php
include"koneksi.php";



$Nama = $_POST['Nama'];
$Tanggal = $_POST['Tanggal'];
$Jumlah_donasi = $_POST['Jumlah_donasi'];
$Catatan = $_POST['Catatan'];
$Metode_bayar = $_POST['Metode_bayar'];

$query = "insert INTO donasi SET
								Nama = '$Nama',
								Tanggal = '$Tanggal',
								Jumlah_donasi = '$Jumlah_donasi',
								Catatan = '$Catatan',
								Metode_bayar = '$Metode_bayar'
								";
mysqli_query($koneksi, $query) or die ("Gagal Perintah SQL".mysql_error());
header("location:..\login_berhasil.php");

?>

