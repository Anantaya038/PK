<?php
// required headers
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
// header("Access-Control-Allow-Methods: POST");
// header("Access-Control-Max-Age: 3600");
// header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// get database connection
include "../../connect.php";
 
// get posted data
$data = json_decode(file_get_contents("php://input"));
$sql = "insert into pk_home (name,username,password) values ('{$data->name}','{$data->username}','{$data->password}')";

if($conn->query($sql)){
    echo "SAVE!!!!";
}else{
    echo "ERROR";
}



?>