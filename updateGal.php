<?php
error_reporting(E_ALL);
header("Cache-Control: no-cache");

$dbconn=mysqli_connect("localhost","root","pass","Lisabase");

$gallery = mysqli_query($dbconn, "SELECT * FROM gallery");
echo "<?xml version=\"1.0\"?>\n";
	while($photo = mysqli_fetch_array($gallery)){
		echo "\t<gallery>\n";
		echo "<photo>$photo[photoName]</photo>\n";
		echo "\t</gallery>\n";
	}

mysqli_close($dbconn);

?>
	
	
 	
 
