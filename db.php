<?php

$conn = new mysqli("localhost","root","","login-system");

if($conn->connect_error){
die("Connection failed");
}

?>