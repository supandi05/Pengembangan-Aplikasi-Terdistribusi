<?php 

include 'db.php';
$no = $_POST['No'];
$nama = $_POST['Nama'];
$biaya = $_POST['Biaya'];

mysqli_query($paris, "UPDATE proyek SET Nama='$nama', Biaya='$biaya' WHERE No='$no'");

header("location: proyek.php?pesan=update");
?>