<?php
session_start();
include_once('../db_conn_user.php');

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $sql = "UPDATE users SET user_name = '$username', name = '$name', password = '$password' WHERE id = '$id'";

    if ($conn->query($sql)) {
        $_SESSION['msg'] = 'Member updated successfully';
    } else {
        $_SESSION['msg'] = 'Something went wrong in updating member';
    }
} else {
    $_SESSION['msg'] = 'Select member to edit first';
}

header('location: registered.php');
?>
