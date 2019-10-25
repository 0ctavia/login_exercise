<?php
	// create variables for our db
	$servername = "database";
	$dbusername = "root";
	$dbpassword = "root";
	$dbname = "becode";

	// DB login
    $dbconnect = mysqli_connect($servername,$dbusername,$dbpassword, $dbname) or die("could not connect");
/*    if (!$dbconnect) {
        die ("connection failed:" . mysqli_connect_error());
    } 
 */
?>
