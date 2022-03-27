<?php include "../pat/template/header.php" ?>;

<div class="container">
	<h5 class="text-center">Data Gaji</h5>
		<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a type="button" class="btn btn-primary" href="tambahproyek.php">Tambah Data</a>
    <?php 
            if(isset($_GET['cari'])){
              $cari = $_GET['cari'];?>
    <p><b>Menampilkan Hasil Pencarian <?php echo $cari ?></b></p>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Cari dengan title" aria-label="Search" name="cari">
      <button class="btn btn-outline-success" type="submit">Cari</button>
    </form>
     
           <?php } ?>
  </div>
</nav>
	
	<hr>
		<table class="table table-success table-striped table-bordered border-primary">
			<thead>
		  		<tr>
					<th scope="col">Title</th>
					<th scope="col">Gai</th>
					<th scope="col">Opsi</th>
				</tr>
			</thead>
				<?php 
				include "db.php";
				if(isset($_GET['cari'])){
				 $cari = $_GET['cari'];
    		$hmontreal = mysqli_query($montreal, "select * from gaji where Title like '%".$cari."%'");       
  				}else{
   			 $hmontreal = mysqli_query($montreal, "select * from gaji");   
  					}
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

<?php include "../pat/template/footer.php" ?>;






	



