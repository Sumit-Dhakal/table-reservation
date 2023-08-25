<?php
session_start();
include_once("../db_conn_user.php");

if(isset($_POST["adduser"])) {
    $username = $_POST['username']; // Corrected input name
    $name = $_POST["userfullname"]; // Corrected input name
    $password = $_POST["userpassword"]; // Corrected input name

    // Use prepared statement to safely insert data
    $user_query = "INSERT INTO users(user_name, name, password) VALUES(?, ?, ?)";
    $stmt = mysqli_prepare($conn, $user_query);
    mysqli_stmt_bind_param($stmt, "sss", $username, $name, $password);

    if(mysqli_stmt_execute($stmt)) {
        $_SESSION['status'] = "User Added Successfully";
        header("Location: Registered.php");
    } else {
        $_SESSION['status'] = "User Registration Failed";
        header("Location: Registered.php");
    }

    mysqli_stmt_close($stmt);
}

if(isset($_POST['updateuser'])){
    $user_id = $_POST['user_id'];
    $name = $_POST['userfullname'];
    $password = $_POST['userpassword']; // If you want to update the password, adjust the name attribute in your form

    // Use prepared statement to safely update data
    $query = "UPDATE users SET name=?, password=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssi", $name, $password, $user_id);

    if(mysqli_stmt_execute($stmt)) {
        $_SESSION['status'] = "User updated Successfully";
        header("Location: Registered.php");
    } else {
        $_SESSION['status'] = "User updating Failed";
        header("Location: Registered.php");
    }

    mysqli_stmt_close($stmt);
}


    mysqli_stmt_close($stmt);
?>
