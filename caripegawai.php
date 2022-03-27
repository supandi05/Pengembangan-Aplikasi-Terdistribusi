<?php include "../pat/template/header.php" ?>;

<div class="container">
	<h5 class="text-center">Data Pegawai</h5>
		<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a type="button" class="btn btn-primary" href="tambahpegawai.php">Tambah Data</a>
    <?php 
            if(isset($_GET['cari'])){
              $cari = $_GET['cari'];?>
    <p><b>Menampilkan Hasil Pencarian <?php echo $cari ?></b></p>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Cari dengan nama" aria-label="Search" name="cari">
      <button class="btn btn-outline-success" type="submit">Cari</button>
    </form>
     
           <?php } ?>
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
				if(isset($_GET['cari'])){
				 $cari = $_GET['cari'];
    		$hboston = mysqli_query($boston, "select * from pegawai where Nama like '%".$cari."%'");       
  				}else{
   			 $hboston = mysqli_query($boston, "select * from pegawai");   
  					}
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

<?php include "../pat/template/footer.php" ?>;






	



