<?php

include "db.php";

$userId = $_POST['userId'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE userId='$userId' AND password='$password'";

$result = $conn->query($sql);

if($result->num_rows > 0){

header("Location: dashboard.php");

}

else{

echo "Invalid Login";

}

?>