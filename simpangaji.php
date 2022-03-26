<?php 
include("db.php");

$title = $_POST['Title'];
$gaji = $_POST['Gaji'];

$result = mysqli_query($montreal, "INSERT INTO gaji(Title,Gaji) VALUES('$title','$gaji')");


header("Location: gaji.php?pesan=input")

 ?>