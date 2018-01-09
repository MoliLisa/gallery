<?php
error_reporting(E_ALL);
header("Cache-Control: no-cache");

$dbcon=mysqli_connect("localhost","root","pass","Lisabase");
$photo=$_POST['photo'];
$photo=mysqli_real_escape_string($dbcon,$photo);
$res=mysqli_query($dbcon, "SELECT * FROM gallery");
$count = mysqli_num_rows($res);
$src = "img/".($count+1).".gif";
file_put_contents($src, base64_decode(explode(',', $photo)[1])) ; 
mysqli_query($dbcon, "INSERT INTO gallery (`photoName`) VALUES ('$src')");
unset($photo);
mysqli_close($dbcon);
?>

	
	
 	
 
