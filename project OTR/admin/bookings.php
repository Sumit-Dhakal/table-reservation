<?php
$con = mysqli_connect("localhost", "root", "", "cherry_bloom");

if (mysqli_connect_errno()) {
    die("Cannot Connect to Database: " . mysqli_connect_error());
}

define("UPLOAD_SRC", $_SERVER['DOCUMENT_ROOT'] . "/project OTR-20230718T135333Z-001/project OTR/admin/uploads/");
define("FETCH_SRC", "http://127.0.0.1//project OTR-20230718T135333Z-001/project OTR/admin/uploads/");
if (isset($_POST['addbooking'])) {
    $fullName = $_POST['full_name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phonenumber'];
    $noOfPeople = $_POST['number'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $description = $_POST['description'];

    $query = "INSERT INTO book_table (full_name, email, phone_number, no_of_people, date, time, description) VALUES ('$fullName', '$email', '$phoneNumber', '$noOfPeople', '$date', '$time', '$description')";
    mysqli_query($con, $query);

    // Redirect or display a success message
    header("Location: bookings.php");
    exit();
}
if (isset($_POST['editbooking'])) {
    $bookingId = $_POST['booking_id'];
    $fullName = $_POST['full_name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone_number'];
    $noOfPeople = $_POST['no_of_people'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $description = $_POST['description'];

    // Sanitize input data before using in SQL query (for security)
    $fullName = mysqli_real_escape_string($con, $fullName);
    $email = mysqli_real_escape_string($con, $email);
    $phoneNumber = mysqli_real_escape_string($con, $phoneNumber);
    $noOfPeople = mysqli_real_escape_string($con, $noOfPeople);
    $date = mysqli_real_escape_string($con, $date);
    $time = mysqli_real_escape_string($con, $time);
    $description = mysqli_real_escape_string($con, $description);

    $query = "UPDATE book_table SET full_name='$fullName', email='$email', phone_number='$phoneNumber', no_of_people='$noOfPeople', date='$date', time='$time', description='$description' WHERE id=$bookingId";

    if (mysqli_query($con, $query)) {
        // Redirect or display a success message
        header("Location: bookings.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
}

if (isset($_POST['deletebooking'])) {
    $bookingId = $_POST['booking_id'];

    $query = "DELETE FROM book_table WHERE id=$bookingId";
    mysqli_query($con, $query);

    // Redirect or display a success message
    header("Location: bookings.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Management</title>
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
    <!-- Navigation and Add Booking Button -->
    <div class="container bg-dark text-light p-3 rounded my-4">
        <div class="d-flex align-items-center justify-content-between px-3">
            <h2><a href="index.php" class="text-white text-decoration-none">Dashboard</a>/<a href="bookings.php" class="text-white text-decoration-none">Bookings</a></h2>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addbooking">
                <i class="bi bi-plus-lg"></i> Add Booking
            </button>
        </div>
    </div>

    <!-- Booking Table -->
    <div class="container mt-5 p-0">
        <table class="table text-center">
            <thead class="bg-dark text-light">
                <tr>
                    <th width="10%" scope="col" class="rounded-start">Sr.No</th>
                    <th width="10%" scope="col">Full Name</th>
                    <th width="10%" scope="col">Email</th>
                    <th width="10%" scope="col">Phone Number</th>
                    <th width="10%" scope="col">No. of People</th>
                    <th width="10%" scope="col">Table no.</th>
                    <th width="10%" scope="col">Date</th>
                    <th width="10%" scope="col">Time</th>
                    <th width="10%" scope="col">Description</th>
                    <th width="20%" scope="col" class="rounded-end">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <?php
                $query = "SELECT * FROM `book_table`";
                $result = mysqli_query($con, $query);
                $i = 1;

                while ($fetch = mysqli_fetch_assoc($result)) {
                    echo <<<booking
                    <tr class="align-middle">
                        <th scope="row">$i</th>
                        <td>{$fetch['full_name']}</td>
                        <td>{$fetch['email']}</td>
                        <td>{$fetch['phone_number']}</td>
                        <td>{$fetch['no_of_people']}</td>
                        <td>{$fetch['tables']}</td> <!-- Updated line for "Table no." -->
                        <td>{$fetch['date']}</td>
                        <td>{$fetch['time']}</td>
                        <td>{$fetch['description']}</td>
                          <td>  <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editbooking"
                                    onclick="populateEditModal({id: {$fetch['id']}, full_name: '{$fetch['full_name']}', email: '{$fetch['email']}', phone_number: '{$fetch['phone_number']}', no_of_people: '{$fetch['no_of_people']}', date: '{$fetch['date']}', time: '{$fetch['time']}', description: '{$fetch['description']}'})">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <form method="POST" action="bookings.php">
                                <input type="hidden" name="booking_id" value="{$fetch['id']}">
                                <button type="submit" class="btn btn-danger" name="deletebooking"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    booking;
                    $i++;
                }
                
                ?>
            </tbody>
        </table>
    </div>
    <!-- Add Booking Modal -->
 <!-- Add Booking Modal -->
<div class="modal fade" id="addbooking" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Booking</h5>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Full Name</span>
                        <input type="text" class="form-control" name="full_name" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Email</span>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Phone Number</span>
                        <input type="number" class="form-control" name="phonenumber" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">No. of People</span>
                        <input type="number" class="form-control" name="number" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Date</span>
                        <input type="date" class="form-control" name="date" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Time</span>
                        <input type="time" class="form-control" name="time" required>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Description</span>
                        <input type="text" class="form-control" name="description" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success" name="addbooking">Add</button>
                </div>
            </div>
        </form>
    </div>
</div>

    <!-- Edit Booking Modal -->
    <div class="modal fade" id="editbooking" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Booking</h5>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="booking_id" id="edit-bookingid">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Full Name</span>
                            <input type="text" class="form-control" name="full_name" id="edit-full-name">
                        </div>
<div class="input-group mb-3">
    <span class="input-group-text">Email</span>
    <input type="email" class="form-control" name="email" id="edit-email">
</div>
<div class="input-group mb-3">
    <span class="input-group-text">Phone Number</span>
    <input type="number" class="form-control" name="phone_number" id="edit-phone-number">
</div>
<div class="input-group mb-3">
    <span class="input-group-text">No. of People</span>
    <input type="number" class="form-control" name="no_of_people" id="edit-no-of-people">
</div>
<div class="input-group mb-3">
    <span class="input-group-text">Date</span>
    <input type="date" class="form-control" name="date" id="edit-date">
</div>
<div class="input-group mb-3">
    <span class="input-group-text">Time</span>
    <input type="time" class="form-control" name="time" id="edit-time">
</div>
<div class="input-group mb-3">
    <span class="input-group-text">Description</span>
    <input type="text" class="form-control" name="description" id="edit-description">
</div>

      <div class="modal-footer">
        <button type="reset" class="btn  btn-outline-secondary" data-bs-dismiss="modal">Cancle</button>
        <button type="submit" class="btn btn-success" name="editbooking">Edit</button>
      </div>
    </div>
    </form>
        </div>
    </div>
    <script>
        function populateEditModal(bookingData) {
    document.getElementById('edit-bookingid').value = bookingData.id;
    document.getElementById('edit-full-name').value = bookingData.full_name;
    document.getElementById('edit-email').value = bookingData.email;
    document.getElementById('edit-phone-number').value = bookingData.phone_number;
    document.getElementById('edit-no-of-people').value = bookingData.no_of_people;
    document.getElementById('edit-date').value = bookingData.date;
    document.getElementById('edit-time').value = bookingData.time;
    document.getElementById('edit-description').value = bookingData.description;
}
        
    </script>
</body>
</html>
