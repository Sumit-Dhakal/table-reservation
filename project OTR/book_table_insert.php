<?php
include "dp_connect.php";

session_start(); // Start the session

if (isset($_POST['submit'])) {
  $full_name = $_POST['full_name'];
  $email = $_POST['email'];
  $phone_no = $_POST['phone_no'];
  $no_of_people = $_POST['no_of_people'];
  $date = $_POST['date'];
  $time_hour = $_POST['time_hour'];
  $time_minute = $_POST['time_minute'];
  $time_period = $_POST['time_period'];

  // Combine the hour and minute into a time string
  $time = "$time_hour:$time_minute $time_period";
  
  $tables = $_POST['tables']; // Get the selected table number

  $note = $_POST['note'];

  // Check if the selected table is already occupied
  $checkSql = "SELECT * FROM book_table WHERE date = '$date' AND time = '$time' AND tables = '$tables'";
  $checkResult = mysqli_query($conn, $checkSql);
  if (mysqli_num_rows($checkResult) > 0) {
    $tablestatus = "This table is already booked for the chosen date and time.";
    $_SESSION['booking_success'] = false; // Set session variable for failure
    header("Location: book.php?tablestatus=" . urlencode($tablestatus));
    exit();
  } else {
    // Insert the booking information into the database
    $insertSql = "INSERT INTO book_table (full_name, email, phone_number, no_of_people, date, time, tables, description) 
    VALUES ('$full_name','$email','$phone_no','$no_of_people','$date','$time','$tables','$note')";
if (mysqli_query($conn, $insertSql)) {
$_SESSION['booking_success'] = true; // Set session variable for success
header("Location: book.php");
exit();
} else {
$tablestatus = "Error: " . mysqli_error($conn);
$_SESSION['booking_success'] = false; // Set session variable for failure
header("Location: book.php?tablestatus=" . urlencode($tablestatus));
exit();
}
  }
  mysqli_close($conn);
}
?>
