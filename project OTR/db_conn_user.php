<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "cherry_bloom";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}


define("UPLOAD_SRC",$_SERVER['DOCUMENT_ROOT']."/ad_menu_php/uploads/");
?>