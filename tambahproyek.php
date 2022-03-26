<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tugas Pengembangan Aplikasi Terdistribusi - Supandi</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Supandi - A2.1900174</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="pegawai.php">Pegawai</a>
        <a class="nav-link" href="proyek.php">Proyek</a>
        <a class="nav-link" href="gaji.php">Gaji</a>
        <a class="nav-link" href="tugas.php">Tugas</a>
      </div>
    </div>
  </div>
</nav>
<br><br>
<div class="container">
	<h5 class="text-center">Tambah Proyek</h5>
<hr>
		<form action="simpanproyek.php" method="post">
			<div class="form-group">
				<label for="no">No</label>
				<input type="text" class="form-control" name="No">
			</div>
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" class="form-control" name="Nama">
			</div>		
			<div class="form-group">
				<label for="biaya">Biaya</label>
				<input type="text" class="form-control" name="Biaya">
			</div>		
			<hr>
			<button type="submit" class="btn btn-success">Simpan</button>
			<a type="submit" class="btn btn-danger" href="proyek.php">Batal</a>
	</form>
	

</div>
</body>
<script src="js/bootstrap.min.js"></script>
</html>







	



