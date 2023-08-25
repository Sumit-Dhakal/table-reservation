<?php 
$con = mysqli_connect("localhost", "root", "", "cherry_bloom");

if (mysqli_connect_errno()) {
    die("Cannot Connect to Database: " . mysqli_connect_error());
}

// Define the upload directory path relative to your script location
define("UPLOAD_SRC",$_SERVER['DOCUMENT_ROOT']."/project OTR-20230718T135333Z-001/project OTR/admin/uploads/");
define("FETCH_SRC","http://127.0.0.1//project OTR-20230718T135333Z-001/project OTR/admin/uploads/");
?>