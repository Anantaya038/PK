<?php
include "connect.php";

if(isset($_POST['save'])){
    $name = $_POST['name'];

$sql = "INSERT INTO pk_home (name)
VALUES ('".$name."')";
if ($conn->query($sql) === TRUE) {
    echo $sql;
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
