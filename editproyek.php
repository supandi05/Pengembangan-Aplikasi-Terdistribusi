<?php include "../pat/template/header.php" ?>;


<div class="container">
	<h5 class="text-center">Edit Data Proyek</h5>
	<?php 
	include "db.php";
	$no = $_GET['No'];
	$result = mysqli_query($paris, "SELECT * FROM proyek WHERE No='$no'")or die(mysql_error());
	while($data = mysqli_fetch_array($result)){
	?>
<hr>
		<form action="editproyekexec.php" method="post">
			<div class="form-group">
				<label for="no">No</label>
				<input type="text" name="No" class="form-control" value="<?php echo $data['No']; ?>">
			</div>
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" class="form-control" name="Nama" value="<?php echo $data['Nama']; ?>">
			</div>		
			<div class="form-group">
				<label for="biaya">Biaya</label>
				<input type="text" class="form-control" name="Biaya" value="<?php echo $data['Biaya']; ?>">
			</div>		
			<hr>
			<button type="submit" class="btn btn-success">Simpan</button>
			<a type="submit" class="btn btn-danger" href="pegawai.php">Batal</a>
	</form>
	
<?php } ?>
</div>

<?php include "../pat/template/footer.php" ?>;




	



