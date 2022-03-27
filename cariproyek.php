<?php include "../pat/template/header.php" ?>;

<div class="container">
	<h5 class="text-center">Data Proyek</h5>
		<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a type="button" class="btn btn-primary" href="tambahproyek.php">Tambah Data</a>
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
					<th scope="col">No</th>
					<th scope="col">Nama</th>
					<th scope="col">Biaya</th>
					<th scope="col">Opsi</th>
				</tr>
			</thead>
				<?php 
				include "db.php";
				if(isset($_GET['cari'])){
				 $cari = $_GET['cari'];
    		$hparis = mysqli_query($paris, "select * from proyek where Nama like '%".$cari."%'");       
  				}else{
   			 $hparis = mysqli_query($paris, "select * from proyek");   
  					}
				while($rparis = mysqli_fetch_array($hparis)){
				?>
					<tr>
					<td><?php echo $rparis['0']; ?></td>
					<td><?php echo $rparis['1']; ?></td>
					<td><?php echo $rparis['2']; ?></td>
					<td>
						<a type="button" class="btn btn-success" href="editproyek.php?No=<?php echo $rparis['0']; ?>">Edit</a> |
						<a type="button" class="btn btn-danger" href="hapusproyek.php?No=<?php echo $rparis['0']; ?>">Hapus</a>			
					</td>
				</tr>
				<?php } ?>
		</table>

</div>

<?php include "../pat/template/footer.php" ?>;






	



