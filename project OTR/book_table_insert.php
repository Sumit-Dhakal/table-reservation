<?php
include "dp_connect.php";

if(isset($_POST['submit']))
{
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $no_of_people = $_POST['no_of_people'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $note = $_POST['note'];


    // echo $full_name;
    // echo $email;
    // echo $date;
    // echo $time;

    $sql = "INSERT INTO book_table (full_name, email, phone_number, no_of_people, date, time, description) 
    VALUES ('$full_name','$email','$phone_no','$no_of_people','$date','$time','$note')";
    
    if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
     header("Location: book.php");
}
?>