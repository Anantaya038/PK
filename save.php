<?php
include "connect.php";
$conn = new mysqli("159.65.133.152", "admin_mba", "pp6321", "admin_mba");
// if(isset($_POST['save'])){
//     $name = $_POST['name'];

// $sql = "INSERT INTO pk_home (name)
// VALUES ('".$name."')";
// if ($conn->query($sql) === TRUE) {
//     echo $sql;
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();
$sql = "insert into pk_home (name,username,password) values ('
{$_POST["name"]}','{$_POST["username"]}','{$_POST["password"]}')";

if($con->query($sql)){
    echo "SAVE!!!!";
}else{
    echo "ERROR";
}
?>
