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
	<h5 class="text-center">Data Gaji</h5>
	<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a type="button" class="btn btn-primary" href="tambahgaji.php">Tambah Data</a>
    <form class="d-flex" action="carigaji.php">
      <input class="form-control me-2" type="search" placeholder="Cari dengan title" aria-label="Search" name="cari">
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
				<th>Title</th>
				<th>Gaji</th>
				<th>Opsi</th>
			</tr>
		</thead>
			<?php include("db.php");
			$hmontreal = mysqli_query($montreal, "select * from Gaji");
			while($rmontreal = mysqli_fetch_array($hmontreal)){
				?>
				<tr>
					<td><?php echo $rmontreal['0']; ?></td>
					<td><?php echo $rmontreal['1']; ?></td>
					<td>
						<a type="button" class="btn btn-success" href="editgaji.php?Title=<?php echo $rmontreal['0']; ?>">Edit</a> |
						<a type="button" class="btn btn-danger" href="hapusgaji.php?Title=<?php echo $rmontreal['0']; ?>">Hapus</a>				
					</td>
				</tr>
				<?php } ?>
		</table>
</div>
<br><br>

<?php include "../pat/template/footer.php" ?>;








	



