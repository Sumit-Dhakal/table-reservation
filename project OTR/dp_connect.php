<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "cherry_bloom";

// creating the connection to the server
$conn = new mysqli($servername, $username, $password, $databasename);

if($conn->connect_error){
    die("connection failed: ". $conn->connect_error);
}

echo "connection success";

?>