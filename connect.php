<?php
$servername = "159.65.133.152";
$username = "admin_mba";
$password = "pp6321";
$dbname = "admin_mba";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>