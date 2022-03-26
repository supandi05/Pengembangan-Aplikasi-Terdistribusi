<?php 
include 'db.php';
$no = $_GET['No'];
mysqli_query($paris, "DELETE FROM proyek WHERE No='$no'")or die(mysql_error());
 
header("location: proyek.php?pesan=hapus");
?>