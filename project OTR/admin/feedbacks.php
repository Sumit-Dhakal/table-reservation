<?php
$con = mysqli_connect("localhost", "root", "", "cherry_bloom");

if (mysqli_connect_errno()) {
    die("Cannot Connect to Database: " . mysqli_connect_error());
}

if (isset($_POST['deletefeedback'])) {
    $feedbackId = $_POST['feedback_id'];

    $query = "DELETE FROM message WHERE id=$feedbackId";
    mysqli_query($con, $query);

    // Redirect or display a success message
    header("Location: feedbacks.php");
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
    <!-- Navigation and Feedbacks Title -->
    <div class="container bg-dark text-light p-3 rounded my-4">
        <div class="d-flex align-items-center justify-content-between px-3"> <h2><a href="index.php" class="text-white text-decoration-none">Dashboard</a>/
        <a href="feedbacks.php" class="text-white text-decoration-none">Feedbacks</a></h2>
        </div>
    </div>

    <!-- Feedbacks Table -->
    <div class="container mt-5 p-0">
        <table class="table text-center">
            <thead class="bg-dark text-light">
                <tr>
                    <th width="10%" scope="col" class="rounded-start">ID</th>
                    <th width="30%" scope="col">Name</th>
                    <th width="30%" scope="col">Email</th>
                    <th width="30%" scope="col">Message</th>
                    <th width="10%" scope="col" class="rounded-end">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <?php
                $query = "SELECT * FROM `message`";
                $result = mysqli_query($con, $query);
                $i = 1;

                while ($fetch = mysqli_fetch_assoc($result)) {
                    echo <<<feedback
                    <tr class="align-middle">
                        <th scope="row">$i</th>
                        <td>{$fetch['name']}</td>
                        <td>{$fetch['email']}</td>
                        <td>{$fetch['message']}</td>
                        <td>
                            <form method="POST" action="feedbacks.php">
                                <input type="hidden" name="feedback_id" value="{$fetch['id']}">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewFeedbackModal{$i}">View</button>
                                <button type="submit" class="btn btn-danger" name="deletefeedback">Delete</button>
                            </form>
                        </td>
                    </tr>
                    feedback;

                    // View Feedback Modal
                    echo <<<modal
                    <div class="modal fade" id="viewFeedbackModal{$i}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">View Feedback</h5>
                                </div>
                                <div class="modal-body">
                                    <p>Name: {$fetch['name']}</p>
                                    <p>Email: {$fetch['email']}</p>
                                    <p>Message: {$fetch['message']}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    modal;

                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        // Add this script to ensure Bootstrap's JavaScript is properly initialized
        document.addEventListener("DOMContentLoaded", function() {
            var modals = document.querySelectorAll(".modal");
            modals.forEach(function(modal) {
                new bootstrap.Modal(modal);
            });
        });
    </script>
</body>
</html>
