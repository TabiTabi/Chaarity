<html>
<title>Riwayat Donasi</title>
<head>
<link rel="stylesheet" href="style/materialize.min.css" />
</head>
<body>
<nav>
        <div class="nav-wrapper teal">
        <div class="container">
          <a href="index.php" class="brand-logo center white-text">CHAARITY</a>
        </div>
        </div>
</nav>
<?php
include 'koneksi.php';
$sql3 = mysqli_query($koneksi, "SELECT SUM(Jumlah_donasi)
FROM donasi");
while($data3 = mysqli_fetch_array($sql3)) {
 ?>
<tr>
<td><h4><center>Total Donasi Terkumpul :</center></h4></td></a>
<td><h1><center><font color = #03ba92> <?php echo "Rp." . number_format($data3['SUM(Jumlah_donasi)']) ;?></font></center></h1></td>
</tr>
<?php
}
?>
<div class="container" style="margin-top:8%">
	<div class="row">
		<div class="col-md-8 col-md-offset-2"> 
			<p>
				<center>
					<h5>Riwayat Donasi Masuk</h5><hr>
				</center>
			</p>
			<br>
			<p>
				
			</p>
			<table class="table table-bordered">
				<tr>
					<th>
						No 
					</th>
					
					<th>
						Tanggal Donasi
					</th>
					<th>
						Jumlah Donasi
					</th>
					
					<th>
						
					</th>
				</tr>
					<?php
						include"koneksi.php";
						$no = 1;
						$data = mysqli_query ($koneksi, " select 
																Nama,
																Tanggal,
																Jumlah_donasi,
																Catatan
														  from 
														  donasi 
														  order by Tanggal DESC");
						while ($row = mysqli_fetch_array ($data))
						{
					?>
				<tr>
					<td>
						<?php echo $no++; ?>
					</td>
					
					<td>
						<?php echo $row['Tanggal']; ?>
					</td>
					<td>
						<?php echo "Rp. " . $row['Jumlah_donasi']; ?>
					</td>
					
					<td>
						
					</td>
				</tr>
				<?php
					}
				?>
			</table>
		</div>
	</div>
</div>

<div class="container" style="margin-top:8%">
	<div class="row">
		<div class="col-md-8 col-md-offset-2"> 
			<p>
				<center>
					<h5>Riwayat Donasi Keluar</h5><hr>
				</center>
			</p>
			<br>
			<table class="table table-bordered">
				<tr>
					<th>
						No 
					</th>
					<th>
						Jenis Kegiatan
					</th>
					<th>
						Tanggal
					</th>
					<th>
						Jumlah
					</th>
					<th>
						Catatan
					</th>
					<th>
						
					</th>
				</tr>
					<?php
						include"koneksi.php";
						$no = 1;
						$data = mysqli_query ($koneksi, " select 
																Nama,
																Tanggal,
																Use_donasi,
																Catatan
														  from 
														  use_donasi 
														  order by Tanggal DESC");
						while ($row = mysqli_fetch_array ($data))
						{
					?>
				<tr>
					<td>
						<?php echo $no++; ?>
					</td>
					<td>
						<?php echo $row['Nama']; ?>
					</td>
					<td>
						<?php echo $row['Tanggal']; ?>
					</td>
					<td>
					    <?php echo "Rp. " . $row['Use_donasi']; ?>
					</td>
					<td>
						<?php echo $row['Catatan']; ?>
					</td>
					<td>
						
					</td>
				</tr>
				<?php
					}
				?>
			</table>
		</div>
	</div>
</div>
</body>
</html>