<?php include "../pat/template/header.php" ?>;

<div class="container">
	<h5 class="text-center">Data Pegawai</h5>
		<table class="table table-success table-striped table-bordered border-primary">
			<thead>
		  		<tr>
					<th scope="col">NIK</th>
					<th scope="col">Nama</th>
					<th scope="col">Title</th>
				</tr>
			</thead>
				<?php 
				include "db.php";
				$hboston = mysqli_query($boston, "select * from Pegawai");
				while($rboston = mysqli_fetch_array($hboston)){
				?>
					<tr>
					<td><?php echo $rboston['0']; ?></td>
					<td><?php echo $rboston['1']; ?></td>
					<td><?php echo $rboston['2']; ?></td>
				</tr>
				<?php } ?>
		</table>
</div>
<br><br>

<div class="container">
	<h5 class="text-center">Data Gaji</h5>
		<table class="table table-success table-striped table-bordered border-primary">
			<thead>
			<tr>
				<th>Title</th>
				<th>Gaji</th>
			</tr>
		</thead>
			<?php include("db.php");
			$hmontreal = mysqli_query($montreal, "select * from Gaji");
			while($rmontreal = mysqli_fetch_array($hmontreal)){
				?>
				<tr>
					<td><?php echo $rmontreal['0']; ?></td>
					<td><?php echo $rmontreal['1']; ?></td>
				</tr>
				<?php } ?>
		</table>
</div>
<br><br>

<div class="container">
	<h5 class="text-center">Data Proyek</h5>
		<table class="table table-success table-striped table-bordered border-primary">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Biaya</th>
				</tr>
			</thead>
			<?php include("db.php");
			$hparis = mysqli_query($paris, "select * from Proyek");
			while($rparis = mysqli_fetch_array($hparis)){
				?>
				<tr>
					<td><?php echo $rparis['0']; ?></td>
					<td><?php echo $rparis['1']; ?></td>
					<td><?php echo $rparis['2']; ?></td>
				</tr>
				<?php } ?>
		</table>
</div>
<br><br>

<div class="container">
	<h5 class="text-center">Data Tugas</h5>
		<table class="table table-success table-striped table-bordered border-primary">
			<thead>
				<tr>
					<th>NIK</th>
					<th>Pno</th>
					<th>Jabatan</th>
					<th>Durasi</th>
				</tr>
			</thead>
			<?php include("db.php");
			$hnewyork = mysqli_query($newyork, "select * from Tugas");
			while($rnewyork = mysqli_fetch_array($hnewyork)){
				?>
				<tr>
					<td><?php echo $rnewyork['0']; ?></td>
					<td><?php echo $rnewyork['1']; ?></td>
					<td><?php echo $rnewyork['2']; ?></td>
					<td><?php echo $rnewyork['3']; ?></td>
				</tr>
				<?php } ?>
		</table>
</div>
<br><br>

<?php include "../pat/template/footer.php" ?>;







	



