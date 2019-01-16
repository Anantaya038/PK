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
$sql = "UPDATE pk_home SET name = '{$data->name}', username = '{$data->username}', password = '{$data->password}', WHERE name_id = {$data->name_id}";

if($conn->query($sql)){
    echo "UPDATE!!!!";
}else{
    echo "ERROR";
}



?>