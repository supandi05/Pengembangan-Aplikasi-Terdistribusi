<?php

include("db.php");


	echo "<div>
	<p> Nama : Supandi </p>
	<p> NIM : A2.1900174 </p>
	</div>";
	echo "<a href=index.php>Home</a><br><br>";


	echo "Data Tugas";
	echo "<table border=1>";
	echo "<tr>
			<th>NIK</th>
			<th>PNo</th>
			<th>Jabatan</th>
			<th>Durasi</th>
		</tr>";

		$hnewyork = mysqli_query($newyork, "select * from Tugas");
		while($rnewyork = mysqli_fetch_array($hnewyork)){
			echo "<tr>";

			echo "<td>". $rnewyork[0]  ."<br>";
				$hboston = mysqli_query($boston, "select * from Pegawai where NIK = '". $rnewyork[0] ."'");
				while($rboston = mysqli_fetch_array($hboston)){
					echo $rboston[1] ."<br>";
					echo $rboston[2] ."<br>";
				}
			echo "</td>";

			echo "<td>". $rnewyork[1]  ."<br>";
				$hparis = mysqli_query($paris, "select * from Proyek where No = '". $rnewyork[1] ."'");
				while($rparis = mysqli_fetch_array($hparis)){
					echo $rparis[1] ."<br>";
					echo $rparis[2] ."<br>";
				}
			echo "</td>";
				echo "</td>";

			echo "<td>". $rnewyork[2] ."</td>";
			echo "<td>". $rnewyork[3] ."</td>";

			echo "</tr>";
		}
		echo "</table>";
		echo "<br><br>";
?>