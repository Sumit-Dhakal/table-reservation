<?php
$con = mysqli_connect("localhost", "root", "", "cherry_bloom");

if (mysqli_connect_errno()) {
    die("Cannot Connect to Database: " . mysqli_connect_error());
}

if (isset($_POST['user_id'])) {
    $userId = $_POST['user_id'];

    // Delete the user from the database
    $query = "DELETE FROM users WHERE id = $userId";
    mysqli_query($con, $query);

    // Redirect back to the user list page
    header("Location: Registered.php");
    exit();
}
?>
