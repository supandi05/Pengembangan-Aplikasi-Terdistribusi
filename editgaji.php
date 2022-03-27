<?php include "../pat/template/header.php" ?>;
<div class="container">
	<h5 class="text-center">Edit Data Gaji</h5>
	<?php 
	include "db.php";
	$title = $_GET['Title'];
	$result = mysqli_query($montreal, "SELECT * FROM gaji WHERE Title='$title'")or die(mysql_error());
	while($data = mysqli_fetch_array($result)){
	?>
<hr>
		<form action="editgajiexec.php" method="post">
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="Title" class="form-control" value="<?php echo $data['Title']; ?>">
			</div>
			<div class="form-group">
				<label for="gaji">Gaji</label>
				<input type="text" class="form-control" name="Gaji" value="<?php echo $data['Gaji']; ?>">
			</div>		
			<hr>
			<button type="submit" class="btn btn-success">Simpan</button>
			<a type="submit" class="btn btn-danger" href="pegawai.php">Batal</a>
	</form>
	
<?php } ?>
</div>


<?php include "../pat/template/footer.php" ?>;




	



