<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "pizzashop";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$username = $_POST["username"];
$password = $_POST["password"];
$salt = "Pizzashop";
$password_encrypted = sha1($password.$salt);


$sql = mysqli_query($conn, "SELECT count(*) as total from employee WHERE username = '".$username."' and 
	password = '".$password."'");

$row = mysqli_fetch_array($sql);

if($row["total"] > 0){
	?>
	<script>
		alert('Login successful');
        window.location='index.html';
	</script>
	
	<?php
}
else{
	?>
	<script>
		alert('Login failed and try agin');
        window.location='empsig.html';
	</script>
	<?php
}