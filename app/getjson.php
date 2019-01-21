<?php
include "connect.php";

$sql= "SELECT * FROM pk_home where username = '$_GET[username]";
$result = $conn->query($sql);

if($result->num_rows > 0){
    $array = array();

while($row = $result->fetch_assoc())
{
//   $json_data[] = array(
//       "id" => $row['name_id'],
//       "name" => $row['name'],
//       "username" => $row['']
    
//   );
//$row['key'] = $_GET[username];
array_push($array,$row);
}
echo json_encode($array);
}
//echo json_encode($json_data);

?>