<?php 
include("db.php");

$no = $_POST['No'];
$nama = $_POST['Nama'];
$biaya = $_POST['Biaya'];

$result = mysqli_query($paris, "INSERT INTO proyek(No,Nama,Biaya) VALUES('$no','$nama','$biaya')");


header("Location: proyek.php?pesan=input")

 ?>