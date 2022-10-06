<!DOCTYPE html>
<html>
    <head>
        <title>contoh 01</title>
    </head>
    <body>
        <div><input type="submit" name="submit" value="Simpan"/>
    <?php
    from "koneksi.php";
	if (isset($_POST['submit'])) {
		echo '<h1>Hasil Input</h1>';
		echo '<ul>';
		echo '<li>Nama    : ' . $_POST['nama'] . '</li>';
		echo '<li>No.HP   : ' . $_POST['NoHP'] . '</li>';
		echo '<li>Jumlah  : ' . $_POST['jumlah'] . '</li>';
	  echo '<li>Comment : ' . $_POST['comment'] . '</li>';
		echo '<li>metode bayar: ' . $_POST['Metode_bayar'] . '</li>';
	
}?></div>
    </body>
</html>