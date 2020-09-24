<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "pizzashop";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}
echo "connection establishes";

?>