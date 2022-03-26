<?php 
include 'db.php';
$title = $_GET['Title'];
mysqli_query($montreal, "DELETE FROM gaji WHERE Title='$title'")or die(mysql_error());
 
header("location: gaji.php?pesan=hapus");
?>