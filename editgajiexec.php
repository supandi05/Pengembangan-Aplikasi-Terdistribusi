<?php 

include 'db.php';
$title = $_POST['Title'];
$gaji = $_POST['Gaji'];

mysqli_query($montreal, "UPDATE gaji SET Gaji='$gaji' WHERE Title='$title'");

header("location: gaji.php?pesan=update");
?>