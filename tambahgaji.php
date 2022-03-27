<?php include "../pat/template/header.php" ?>;

<div class="container">
	<h5 class="text-center">Tambah Gaji</h5>
<hr>
		<form action="simpangaji.php" method="post">
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" class="form-control" name="Title">
			</div>
			<div class="form-group">
				<label for="gaji">Gaji</label>
				<input type="text" class="form-control" name="Gaji">
			</div>		
			<hr>
			<button type="submit" class="btn btn-success">Simpan</button>
			<a type="submit" class="btn btn-danger" href="gaji.php">Batal</a>
	</form>
	

</div>

<?php include "../pat/template/footer.php" ?>;






	



