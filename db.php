<?php
/*

// localhost username pass db_name
$con =mysqli_connect("localhost","root","root","oop");

if (mysqli_connect_errno()){
	echo "failed to connect ".mysqli_connect_error();
}
*/

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "oop";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>