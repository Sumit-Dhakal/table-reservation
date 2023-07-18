<?php 
include "dp_connect.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['note'];

    $sql = "INSERT INTO message(name, email, message) VALUES ('$name','$email','$message')";

    if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
     header("Location: contact.php");
}
?>