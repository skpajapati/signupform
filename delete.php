<?php
include './include/connect.php';
include 'header.php';
$id = $_GET['id'];
$query = "DELETE FROM `crud_operation` WHERE id='$id'";
$result = mysqli_query($con, $query);
if ($result) {
    header("Location:view.php");
} else {
    echo die(mysqli_error($con));
}