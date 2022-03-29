<?php include "../pat/template/header.php" ?>;

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
		<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a type="button" class="btn btn-secondary" href="tambahpegawai.php">Tambah Data</a>
    <form class="d-flex" action="caripegawai.php">
      <input class="form-control me-2" type="search" placeholder="Cari dengan nama" aria-label="Search" name="cari">
      <button class="btn btn-outline-success" type="submit">Cari</button>
    </form>
     <?php 
            if(isset($_GET['cari'])){
              $cari = $_GET['cari'];
            }
            ?>
  </div>
</nav>
	
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
						<a type="button" class="btn btn-primary" href="editpegawai.php?Nik=<?php echo $rboston['0']; ?>">Edit</a> |
						<a type="button" class="btn btn-danger" href="hapuspegawai.php?Nik=<?php echo $rboston['0']; ?>">Hapus</a>
				<?php } ?>
		</table>
</div>

<?php include "../pat/template/footer.php" ?>;

