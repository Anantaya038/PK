<?php
// include "connect.php";
$con = new mysqli ("159.65.133.152", "admin_mba", "pp6321", "admin_mba");
$name = $_POST["name"];
$sql = "INSERT INTO 'pk_home' ('name') VALUES ($name)";

if($con->query($sql)){
echo "Data Save";
}
?>