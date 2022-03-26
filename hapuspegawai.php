<?php 
include 'db.php';
$nik = $_GET['Nik'];
mysqli_query($boston, "DELETE FROM pegawai WHERE Nik='$nik'")or die(mysql_error());
 
header("location: pegawai.php?pesan=hapus");
?>