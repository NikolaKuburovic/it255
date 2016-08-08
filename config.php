<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "met_hotels";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error) {
	die("Konekcija ima gresku: " .$conn->connect_error);
}

?>