<!DOCTYPE html>
<html ng-app="">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORM PAY</title>
    <link rel="stylesheet" href="style2.css" type="text/css">
    <script src="js/javascript.js" type="text/javascript"></script>
    <script src="js/angular-1.7.5/angular.min.js" type="text/javascript"></script>
  </head>
  <body>
  <div class="container">
    <h1 style="margin:10px;">PAYMENT</h1>
    <form class="" role="form" method="post" action="crud\input.php" >
      <input required class="input-form laf" type="text" name="Nama" value="<?=isset($_POST['Nama']) ? $_POST['Nama'] : ''?>" placeholder="Nama">
      <input required class="input-form laf" type="date" name="Tanggal" value="<?=isset($_POST['Tanggal']) ? $_POST['Tanggal'] : ''?>" placeholder="Tanggal">
      <input required class="input-form laf" type="number" name="Jumlah_donasi" value="<?=isset($_POST['Jumlah_donasi']) ? $_POST['Jumlah_donasi'] : ''?>" placeholder="Jumlah">
      <textarea class="input-form" cols="5" rows="5" name="Catatan" value="<?=isset($_POST['Catatan']) ? $_POST['Catatan'] : ''?>" placeholder="Catatan" required></textarea>
      </textarea>

      <div style="overflow-x:auto;">
        <label>Pilih Metode Pembayaran</label>
        <table border=0 cellpadding="10">
          <tr>
            <th><input type="checkbox" name="Metode_bayar" value="<?=isset($_POST['Metode_bayar']) ? $_POST['Metode_bayar'] : 'bni'?>"><img src="img/bni.png" width="60px" height="20px"></th>
            <th><input type="checkbox" name="Metode_bayar" value="<?=isset($_POST['Metode_bayar']) ? $_POST['Metode_bayar'] : 'bca'?>"><img src="img/logo-bca.png" width="60px" height="20px"></th>
            <th><input type="checkbox" name="Metode_bayar" value="<?=isset($_POST['Metode_bayar']) ? $_POST['Metode_bayar'] : 'bri'?>"><img src="img/bri.png" width="60px" height="25px"></th>
            <th><input type="checkbox" name="Metode_bayar" value="<?=isset($_POST['Metode_bayar']) ? $_POST['Metode_bayar'] : 'bjb'?>"><img src="img/bjb.png" width="60px" height="30px"></th>
            <th><input type="checkbox" name="Metode_bayar" value="<?=isset($_POST['Metode_bayar']) ? $_POST['Metode_bayar'] : 'dki'?>"><img src="img/bankdki.png" width="60px" height="25px"></th>
            <th><input type="checkbox" name="Metode_bayar" value="<?=isset($_POST['Metode_bayar']) ? $_POST['Metode_bayar'] : 'kbb'?>"><img src="img/bankbb.png" width="60px" height="20px"></th>
          </tr>
          <tr>
            <th><input type="checkbox" name="" value=""><img src="img/visa.png" width="60px" height="30px"></th>
            <th><input type="checkbox" name="" value=""><img src="img/masterc.png" width="60px" height="30px"></th>
            <th><input type="checkbox" name="" value=""><img src="img/paypal.png" width="60px" height="20px"></th>
            <th><input type="checkbox" name="" value=""><img src="img/alfa.jpg" width="70px" height="50px"></th>
            <th><input type="checkbox" name="" value=""><img src="img/indomaret.png" width="60px" height="20px"></th>
            <th><input type="checkbox" name="" value=""><img src="img/gopay.jpg" width="65px" height="40px"></th>
          </tr>
        </table>
      </div>
      <div class="row">
		<input type="submit" name="submit" value=""/>
	</div>
      <button  class="btn-form-pay" > pay</button>
      <center><a class="btn-form-change" href="login_berhasil02.php">Batal</a></center>
    </form>
    <?php
if (isset($_POST['submit'])) {
	echo '<h1>Hasil Input</h1>';
	echo '<ul>';
	echo '<li>Nama    : ' . $_POST['nama'] . '</li>';
	echo '<li>No.HP   : ' . $_POST['NoHP'] . '</li>';
	echo '<li>Jumlah  : ' . $_POST['jumlah'] . '</li>';
  echo '<li>Comment : ' . $_POST['comment'] . '</li>';
	echo '<li>metode bayar: ' . $_POST['Metode_bayar'] . '</li>';

}?>
  </div>

  </body>
</html>
