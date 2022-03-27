<?php include "../pat/template/header.php" ?>;

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

<?php include "../pat/template/footer.php" ?>;






	



