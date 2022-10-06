<html>
<title>Data Donasi</title>
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
<div class="container" style="margin-top:8%">
	<div class="row">
		<div class="col-md-8 col-md-offset-2"> 
			<p>
				<center>
					<h5>Data Donasi Masuk</h5><hr>
				</center>
			</p>
			<br>
			
			<table class="table table-bordered">
				<tr>
					<th>
						No 
					</th>
					<th>
						Nama 
					</th>
					<th>
						Tanggal Donasi
					</th>
					<th>
						Jumlah Donasi
					</th>
					<th>
						Catatan
					</th>
					<th>
					    Metode bayar
					</th>
				</tr>
					<?php
						include"koneksi.php";
						$no = 1;
						$data = mysqli_query ($koneksi, " select 
																Nama,
																Tanggal,
																Jumlah_donasi,
																Catatan,
																Metode_bayar
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
						<?php echo $row['Nama']; ?>
					</td>
					<td>
						<?php echo $row['Tanggal']; ?>
					</td>
					<td>
						<?php echo $row['Jumlah_donasi']; ?>
					</td>
					<td>
						<?php echo $row['Catatan']; ?>
					</td>
					<td>
					    <?php echo $row['Metode_bayar']; ?>
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
					<td>
						<a class="btn red" href="hapus.php?id=<?php echo $row['Nama']; ?>">Hapus</a>
					</td>	
					</td>
				</tr>
				<?php
					}
				?>
			</table>
			<p>
	            <a class="btn btn-primary" href="tambah.php">Tambah Anggaran</a>
           </p>
		</div>
	</div>
</div>

<?php
$sql4 = mysqli_query($koneksi, "SELECT SUM(Use_donasi)
FROM use_donasi");
while($data4 = mysqli_fetch_array($sql4)) {
 ?>
<tr>
<td><h4><center>Total Anggaran :</center></h4></td></a>
<td><h1><center><font color = #03ba92> <?php echo "Rp." . number_format($data4['SUM(Use_donasi)']) ;?></font></center></h1></td>
</tr>
<?php
}
?>
</body>
</html>