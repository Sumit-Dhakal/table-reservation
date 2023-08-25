<?php
$con = mysqli_connect("localhost", "root", "", "cherry_bloom");

if (mysqli_connect_errno()) {
    die("Cannot Connect to Database: " . mysqli_connect_error());
}

define("UPLOAD_SRC", $_SERVER['DOCUMENT_ROOT'] . "/project OTR-20230718T135333Z-001/project OTR/admin/uploads/");
define("FETCH_SRC", "http://127.0.0.1//project OTR-20230718T135333Z-001/project OTR/admin/uploads/");

function image_upload($img) {
    $tmp_loc = $img['tmp_name'];
    $new_name = random_int(11111, 99999) . $img['name'];
    $new_loc = UPLOAD_SRC . $new_name;

    if (!move_uploaded_file($tmp_loc, $new_loc)) {
        header("location: ad_menu.php?alert=img_upload");
        exit;
    } else {
        return $new_name;
    }
}

function image_remove($img) {
    if (!unlink(UPLOAD_SRC . $img)) {
        header("location: ad_menu.php?alert=img_rem_fail");
        exit;
    }
}

if (isset($_POST['addmenu'])) {
    foreach ($_POST as $key => $value) {
        $_POST[$key] = mysqli_real_escape_string($con, $value);
    }

    $imgpath = image_upload($_FILES['image']);

    $query = "INSERT INTO menu (`name`, `price`, `description`, `image`) 
              VALUES ('$_POST[name]', '$_POST[price]', '$_POST[desc]', '$imgpath')";

    if (mysqli_query($con, $query)) {
        header("location: ad_menu.php?success=added");
    } else {
        header("location: ad_menu.php?alert=add_failed");
    }
}


if (isset($_GET['rem']) && $_GET['rem'] > 0) {
    $query = "SELECT * FROM `menu` WHERE `id`='$_GET[rem]'";
    $result = mysqli_query($con, $query);
    $fetch = mysqli_fetch_assoc($result);

    image_remove($fetch['image']);
    $query = "DELETE FROM menu WHERE id ='$_GET[rem]'";
    if (mysqli_query($con, $query)) {
        header("location: ad_menu.php?success=removed");
    } else {
        header("location: ad_menu.php?alert=remove_failed");
    }
}


if(isset($_POST['editmenu'])){
    foreach ($_POST as $key => $value) {
        $_POST[$key] = mysqli_real_escape_string($con, $value);
    }
    
    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $query = "SELECT * FROM `menu` WHERE `id`='" . $_POST['editpid'] . "'";
        $result = mysqli_query($con, $query);
        $fetch = mysqli_fetch_assoc($result);
    
        $oldImage = $fetch['image'];
        $newImage = image_upload($_FILES['image']);
    
        image_remove($oldImage);
    
        $update = "UPDATE `menu` SET `name`='$_POST[name]', `price`='$_POST[price]', `description`='$_POST[desc]', `image`='$newImage' WHERE `id`='$_POST[editpid]'";
    } else {
        $update = "UPDATE `menu` SET `name`='$_POST[name]', `price`='$_POST[price]', `description`='$_POST[desc]' WHERE `id`='$_POST[editpid]'";
    }

    if (mysqli_query($con, $update)) {
        header("location:ad_menu.php?success=updated");
    } else {
        header("location:ad_menu.php?alert=update_failed");
    }
}

?>
