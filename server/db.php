<?php
$server = "localhost";
$username = "root";
$password = "Firewood";
$dbname = "handymen";
$conn = mysqli_connect($server,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

?>





