<?php
    include "connect.php";
    
	$sql = "SELECT * FROM pk_home";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $ar = array();
    // echo $ar;
    while($row = $result->fetch_assoc()) {
        // echo json_encode($row);
        // $ar = array();
        // $ar['name_id'] = $row['name_id'];
        // $ar['name'] = $row['name'];
        // $myObj->id = $row['name_id'];
        // $myObj->name = $row['name'];
        // $myJSON = json_encode($myObj);
        array_push($ar,$row);
        // echo [$myJSON];
        // echo json_encode($ar);
    }
    echo json_encode($ar);
} else {
    echo "0 results";
}
?>