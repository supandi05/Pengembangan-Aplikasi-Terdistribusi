<?php include "../pat/template/header.php" ?>;

<div class="container">
	<h5 class="text-center">Tambah Data</h5>
<hr>
		<form action="simpanpegawai.php" method="post">
			<div class="form-group">
				<label for="nik">NIK</label>
				<input type="text" class="form-control" name="Nik">
			</div>
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" class="form-control" name="Nama">
			</div>		
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" class="form-control" name="Title">
			</div>		
			<hr>
			<button type="submit" class="btn btn-success">Simpan</button>
			<a type="submit" class="btn btn-danger" href="pegawai.php">Batal</a>
	</form>
	

</div>

<?php include "../pat/template/footer.php" ?>;







	



