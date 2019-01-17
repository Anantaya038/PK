<?PHP 
include ("connect.php");

if ($_GET[mode] == "read") { 
	$sql = "select * from users_pk where username like '$_GET[username]' and password like '$_GET[password]'";
	// $sql = "select firstname, lastname, user_id from user_pk where    password like '$_GET[password]'";
	 
	$query = mysqli_query ($conn, $sql);
	while ($rec = mysqli_fetch_assoc ($query)) { 
		$result[] = $rec;
	 
	}

	echo json_encode ($result);

	
}


if ($_POST[mode] == "create") { 
	$sql = "insert into  users_pk (firstname, lastname, username, password, email, phone) values ('$_POST[firstname]', '$_POST[lastname]', '$_POST[username]', '$_POST[password]', '$_POST[email]', '$_POST[phone]')";

	// echo ($sql);
	
	$query = mysqli_query ($conn, $sql);
	if(!$query) {
		throw new Exception(mysqli_error($conn));
	}

	// echo ($query);


	$result[][status] = 1;
	$result[][msg] = "Insert completed";

	echo json_encode ($result);
}


if ($_GET[mode] == "update" and $_GET[user_id] <> "") { 
	$sql = "select * from users_pk where users_id = '$_GET[users_id]'";
	$query = mysqli_query ($conn, $sql);
	$fieldlist = array ("firstname", "lastname", "username", "password","users_id", "email", "phone");
	while ($rec = mysqli_fetch_assoc ($query)) { 
		foreach ($fieldlist as $key=>$value) { 
			$$value = $rec[$value];
		}
	}
 


}
if ($_POST[mode] == "update") { 

	$fieldlist = array ("firstname", "lastname", "username", "password" ,"email", "phone");
	$sql = "update users_pk set firstname='$_POST[firstname]'";
	$sql .= ", lastname = '$_POST[lastname]'";
	$sql .= ", username = '$_POST[username]'";
    $sql .= ", password = '$_POST[password]'"; 
    $sql .= ", email = '$_POST[email]'"; 
    $sql .= ", phone = '$_POST[phone]'"; 
	$sql .= " where users_id='$_POST[users_id]'";
	
	mysqli_query ($conn, $sql);
	$result[status] = 1;
	$result[msg] = "Insert completed";
 
	echo json_encode ($result);


}
if ($_GET[mode] == "delete") { 
    $sql = "DELETE FROM users_pk WHERE users_id = '$_GET[users_id]'";

    mysqli_query ($conn, $sql);

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

}


?> 