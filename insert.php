<?php
// include "connect.php";
$servername = "159.65.133.152";
$username = "admin_mba";
$password = "pp6321";
$dbname = "admin_mba";

$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

$name = $_POST["name"];
$sql = "INSERT INTO pk_home (name) VALUES ('".$_POST["name"]."')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>