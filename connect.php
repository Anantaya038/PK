<?php
$servername = "159.65.133.152";
$username = "admin_mba";
$password = "pp6321";
$dbname = "admin_mba";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$page = isset($_POST['p'])?$_POST['p']:'';
if($page=='add'){
    $id = $_POST['name_id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $stmt = $db->prepare("insert into pk_home values('','?','?','?')");
    $stmt->bindParam(1,$id);
    $stmt->bindParam(2,$name);
    $stmt->bindParam(3,$username);
    $stmt->bindParam(4,$password);
    $stmt->execute();
} elseif ($page=='edit') {
    
}
?> 