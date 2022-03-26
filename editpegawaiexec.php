<?php 

include 'db.php';
$nik = $_POST['Nik'];
$nama = $_POST['Nama'];
$title = $_POST['Title'];

mysqli_query($boston, "UPDATE pegawai SET Nama='$nama', Title='$title' WHERE NIK='$nik'");

header("location:pegawai.php?pesan=update");
?>