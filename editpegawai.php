<?php include "../pat/template/header.php" ?>;
<div class="container">
	<h5 class="text-center">Edit Data Pegawai</h5>
	<?php 
	include "db.php";
	$nik = $_GET['Nik'];
	$result = mysqli_query($boston, "SELECT * FROM pegawai WHERE NIK='$nik'")or die(mysql_error());
	while($data = mysqli_fetch_array($result)){
	?>
<hr>
		<form action="editpegawaiexec.php" method="post">
			<div class="form-group">
				<label for="nik">NIK</label>
				<input type="text" name="Nik" class="form-control" value="<?php echo $data['NIK']; ?>">
			</div>
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" class="form-control" name="Nama" value="<?php echo $data['Nama']; ?>">
			</div>		
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" class="form-control" name="Title" value="<?php echo $data['Title']; ?>">
			</div>		
			<hr>
			<button type="submit" class="btn btn-success">Simpan</button>
			<a type="submit" class="btn btn-danger" href="pegawai.php">Batal</a>
	</form>
	
<?php } ?>
</div>

<?php include "../pat/template/footer.php" ?>;







	



