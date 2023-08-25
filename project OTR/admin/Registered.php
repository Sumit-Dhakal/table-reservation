<?php
$con = mysqli_connect("localhost", "root", "", "cherry_bloom");

if (mysqli_connect_errno()) {
    die("Cannot Connect to Database: " . mysqli_connect_error());
}

define("UPLOAD_SRC", $_SERVER['DOCUMENT_ROOT'] . "/project OTR-20230718T135333Z-001/project OTR/admin/uploads/");
define("FETCH_SRC", "http://127.0.0.1//project OTR-20230718T135333Z-001/project OTR/admin/uploads/");

if (isset($_POST['adduser'])) {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (user_name, name, password) VALUES ('$username', '$name', '$password')";
    mysqli_query($con, $query);

    // Redirect or display a success message
    header("Location: Registered.php");
    exit();
}

if (isset($_POST['edituser'])) {
    $userid = $_POST['userid'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    $query = "UPDATE users SET user_name='$username', name='$name', password='$password' WHERE id=$userid";
    mysqli_query($con, $query);

    // Redirect or display a success message
    header("Location: Registered.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script>
        // Add this script to ensure Bootstrap's JavaScript is properly initialized
        document.addEventListener("DOMContentLoaded", function() {
            var modals = document.querySelectorAll(".modal");
            modals.forEach(function(modal) {
                new bootstrap.Modal(modal);
            });
        });
    </script>
</head>
<body class="bg-light">
    <!-- Navigation and Add User Button -->
    <div class="container bg-dark text-light p-3 rounded my-4">
        <div class="d-flex align-items-center justify-content-between px-3">
            <h2><a href="index.php" class="text-white text-decoration-none">Dashboard</a>/<a href="Registered.php" class="text-white text-decoration-none">Users</a></h2>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#adduser">
                <i class="bi bi-plus-lg"></i> Add User
            </button>
        </div>
    </div>

    <!-- User Table -->
    <div class="container mt-5 p-0">
        <table class="table text-center">
            <thead class="bg-dark text-light">
                <tr>
                    <th width="10%" scope="col" class="rounded-start">Sr.No</th>
                    <th width="10%" scope="col">User Name</th>
                    <th width="10%" scope="col">Name</th>
                    <th width="10%" scope="col">Password</th>
                    <th width="10%" scope="col" class="rounded-end">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">
    <?php

    $query = "SELECT * FROM `users`";
    $result = mysqli_query($con, $query);
    $i = 1;

    while ($fetch = mysqli_fetch_assoc($result)) {
        echo <<<user
        <tr class="align-middle">
            <th scope="row">$i</th>
            <td>{$fetch['user_name']}</td>
            <td>{$fetch['name']}</td>
            <td>{$fetch['password']}</td>
            <td>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edituser"
                        onclick="populateEditModal({id: {$fetch['id']}, username: '{$fetch['user_name']}', name: '{$fetch['name']}', password: '{$fetch['password']}'})">
                    <i class="bi bi-pencil-square"></i>
                </button>
                <form method="POST" action="delete_user.php" class="d-inline">
                    <input type="hidden" name="user_id" value="{$fetch['id']}">
                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                </form>
            </td>
        </tr>
        user;
        $i++;
    }
    ?>
</tbody>
        </table>
    </div>
    <!-- Add Menu Modal -->
    <div class="modal fade" id="adduser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form  method="POST">
                <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">Add Menu</h5>
                    </div>
                    <div class="modal-body">
            <div class="input-group mb-3">
        <span class="input-group-text">User Name</span>
        <input type="text" class="form-control" name="username" required>
        </div>
        
        <div class="input-group mb-3">
        <span class="input-group-text">Name</span>
        <input type="text" class="form-control" name="name" required>
        </div>
             
        <div class="input-group mb-3">
        <span class="input-group-text">Password</span>
        <input type="Password" class="form-control" name="password" required>
        </div>
      </div>

      <div class="modal-footer">
        <button type="reset" class="btn  btn-outline-secondary" data-bs-dismiss="modal">Cancle</button>
        <button type="submit" class="btn btn-success" name="adduser">Add</button>
      </div>
    </div>
    </form>
        </div>
    </div>
    <!-- Edit Menu Modal -->
    <!-- Edit Menu Modal -->
    <div class="modal fade" id="edituser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit User</h5>
                    </div>
                    <div class="modal-body">
                        <!-- Add a hidden input field to store the user ID -->
                        <input type="hidden" id="edit-userid" name="userid">
                        <div class="input-group mb-3">
                            <span class="input-group-text">User Name</span>
                            <input type="text" class="form-control" name="username" id="edit-username">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Name</span>
                            <input type="text" class="form-control" name="name" id="edit-name">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Password</span>
                            <input type="password" class="form-control" name="password" id="edit-password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success" name="edituser">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
    function populateEditModal(userData) {
        document.getElementById('edit-userid').value = userData.id;
        document.getElementById('edit-username').value = userData.username;
        document.getElementById('edit-name').value = userData.name;
        document.getElementById('edit-password').value = userData.password;
    }
</script>

</body>
</html>
