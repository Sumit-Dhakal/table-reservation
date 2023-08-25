<?php
$con = mysqli_connect("localhost", "root", "", "cherry_bloom");

if (mysqli_connect_errno()) {
    die("Cannot Connect to Database: " . mysqli_connect_error());
}

define("UPLOAD_SRC", $_SERVER['DOCUMENT_ROOT'] . "/project OTR-20230718T135333Z-001/project OTR/admin/uploads/");
define("FETCH_SRC", "http://127.0.0.1//project OTR-20230718T135333Z-001/project OTR/admin/uploads/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
</head>
<body class="bg-light">
    <div class="container bg-dark text-light p-3 rounded my-4">
        <div class="d-flex align-items-center justify-content-between px-3">
            <h2><a href="index.php" class="text-white text-decoration-none">Dashboard</a>/<a href="ad_menu.php" class="text-white text-decoration-none">Menu</a></h2>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addmenu">
                <i class="bi bi-plus-lg"></i> Add Menu
            </button>
        </div>
    </div>
    <div class="container mt-5 p-0">
        <table class="table text-center">
            <thead class="bg-dark text-light">
                <tr>
                    <th width="10%" scope="col" class="rounded-start">Sr.No</th>
                    <th width="15%" scope="col">Image</th>
                    <th width="10%" scope="col">Name</th>
                    <th width="10%" scope="col">Price</th>
                    <th width="30%%" scope="col">Description</th>
                    <th width="30%" scope="col" class="rounded-end">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">
    <?php
    $query = "SELECT * FROM `menu`";
    $result = mysqli_query($con, $query);
    $i = 1;
    $fetch_src = FETCH_SRC; // Make sure FETCH_SRC is defined elsewhere in your code

    while ($fetch = mysqli_fetch_assoc($result)) {
        echo '<tr class="align-middle">';
        echo '<th scope="row">' . $i . '</th>';
        echo '<td><img src="' . $fetch_src . $fetch['image'] . '" width="150px"></td>';
        echo '<td>' . $fetch['name'] . '</td>';
        echo '<td>$' . $fetch['price'] . '</td>';
        echo '<td>' . $fetch['description'] . '</td>';
        echo '<td>';
        echo '<a href="?edit=' . $fetch['id'] . '" class="btn btn-warning me-2"><i class="bi bi-pencil-square"></i></a>';
        echo '<button onclick="confirm_rem(' . $fetch['id'] . ')" type="button" class="btn btn-danger">';
        echo '<i class="bi bi-trash"></i>';
        echo '</button>';
        echo '</td>';
        echo '</tr>';
        $i++;
    }
    ?>
</tbody>

        </table>
    </div>

    <div class="modal fade" id="addmenu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="ad_menu_php.php" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Menu</h5>
                    </div>
                    <div class="modal-body">
            <div class="input-group mb-3">
        <span class="input-group-text">Name</span>
        <input type="text" class="form-control" name="name" required>
        </div>
        <div class="input-group mb-3">
        <span class="input-group-text">Price</span>
        <input type="text" class="form-control" name="price" min="1" required>
        </div>
        
        <div class="input-group mb-3">
        <span class="input-group-text">Description</span>
        <textarea class="form-control" name="desc"required></textarea>
        </div>
             
        <div class="input-group mb-3">
        <label class="input-group-text" >Image</label>
        <input type="file" class="form-control" name="image" accept=".jpg,.png,.svg" required>
        </div>
      </div>

      <div class="modal-footer">
        <button type="reset" class="btn  btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success" name="addmenu">Add</button>
      </div>
    </div>
    </form>
        </div>
    </div>
    <script>
    function confirm_rem(id) {
        if (confirm("Are you sure you want to delete this item?")) {
            window.location.href = "ad_menu_php.php?rem=" + id;
        }
    }
</script>

    <div class="modal fade" id="editmenu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="ad_menu_php.php" method="POST" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Menu</h5>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Name</span>
                        <input type="text" class="form-control" name="name" id="editname" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Price</span>
                        <input type="text" class="form-control" name="price" id="editprice" min="1" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Description</span>
                        <textarea class="form-control" name="desc" id="editdesc" ></textarea>
                    </div>
                    <img src="" id="editimg" width="100%" class="mb-3"><br>
                    <div class="input-group mb-3">
                        <label class="input-group-text">Image</label>
                        <input type="file" class="form-control" name="image"  accept=".jpg,.png,.svg">
                    </div>
               
                <input type="hidden" name="editpid" id="editpid">
            </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success" name="editmenu">Edit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
if(isset($_GET['edit']) && $_GET['edit'] > 0)
{
    $query = "SELECT * FROM `menu` WHERE `id`='$_GET[edit]'";
    $result = mysqli_query($con, $query);
    $fetch = mysqli_fetch_assoc($result);

    echo "
    <script>
        var editmenu = new bootstrap.Modal(document.getElementById('editmenu'), {
            keyboard: false
        });
        document.querySelector('#editname').value = '{$fetch['name']}';
document.querySelector('#editprice').value = '{$fetch['price']}';
document.querySelector('#editdesc').value = '{$fetch['description']}';

        document.querySelector('#editimg').src=`$fetch_src$fetch[image]`;
        document.querySelector('#editpid').value = `$fetch[id]`;
        editmenu.show();
        history.replaceState(null, null, window.location.pathname); // Clear the query parameter
    </script>
    ";
}
?>


</body>
</html>
