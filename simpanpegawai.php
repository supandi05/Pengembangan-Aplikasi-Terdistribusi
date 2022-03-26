<?php 
include("db.php");

$nik = $_POST['Nik'];
$nama = $_POST['Nama'];
$title = $_POST['Title'];

$result = mysqli_query($boston, "INSERT INTO pegawai(Nik,Nama,Title) VALUES('$nik','$nama','$title')");


header("Location: pegawai.php?pesan=input")

 ?>