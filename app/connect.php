<?php
$servername = "159.65.133.152";
$username = "admin_mba";
$password = "pp6321";
$dbname = "admin_mba";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// mysql_connect($servername, $username, $password) or die ('connect failed');
// mysql_query('set names utf8');
// mysql_select_db($dbname) or die ('select failed');


?>