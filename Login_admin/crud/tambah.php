<html>
<title>CRUD</title>

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
                        <h5>Tambah Anggaran</h5><hr>
                    </center>
                </p>
                <br>

                <form role="form" method="post" action="input.php">
                    <div class="form-group">
                        <label>Jenis Kegiatan</label>
                        <input class="form-control" name="Nama">
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="Tanggal">
                    </div>
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input class="form-control" name="Use_donasi">
                    </div>
                    <div class="form-group">
                        <label>Catatan</label>
                        <input class="form-control" name="Catatan">
                    </div>
                    <button type="submit" class="btn green">Simpan</button>
                    <a href="index.php" class="btn red" style="margin-right:1%;">Batal</a>
                </form>
            </div>
        </div>
        <p>
    </div>
    <script src="style/materialize.min.js"></script>
</body>

</html>