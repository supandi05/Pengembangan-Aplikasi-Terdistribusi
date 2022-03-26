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

	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "<div class='alert alert-success' role='alert'>Data berhasil di tambah.</div>";
		}else if($pesan == "update"){
			echo "<div class='alert alert-success' role='alert'>Data berhasil di update.</div>";
		}else if($pesan == "hapus"){
			echo "<div class='alert alert-success' role='alert'>Data berhasil di hapus.</div>";
		}
	}
	?>

<div class="container">
	<h5 class="text-center">Data Pegawai</h5>
	<a type="button" class="btn btn-primary" href="tambahpegawai.php">Tambah Data</a>
	<hr>
		<table class="table table-success table-striped table-bordered border-primary">
			<thead>
		  		<tr>
					<th scope="col">NIK</th>
					<th scope="col">Nama</th>
					<th scope="col">Title</th>
					<th scope="col">Opsi</th>
				</tr>
			</thead>
				<?php 
				include "db.php";
				$hboston = mysqli_query($boston, "select * from Pegawai");
				while($rboston = mysqli_fetch_array($hboston)){
				?>
					<tr>
					<td><?php echo $rboston['0']; ?></td>
					<td><?php echo $rboston['1']; ?></td>
					<td><?php echo $rboston['2']; ?></td>
					<td>
						<a type="button" class="btn btn-success" href="editpegawai.php?Nik=<?php echo $rboston['0']; ?>">Edit</a> |
						<a type="button" class="btn btn-danger" href="hapuspegawai.php?Nik=<?php echo $rboston['0']; ?>">Hapus</a>			
					</td>
				</tr>
				<?php } ?>
		</table>

</div>
</body>
<script src="js/bootstrap.min.js"></script>
</html>







	



