<?php
// include './include/connect.php';
// if (isset($_POST['submit'])) {

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$con = mysqli_connect("localhost", "root", "", "crudoperation");
$query = "UPDATE `crud_operation` SET name='$name',email='$email',mobile='$mobile',password='$password' WHERE id='$id'";
$result = mysqli_query($con, $query);

if ($result) {
    // echo 'update user';
    header('location: view.php');
} else {
    echo die(mysqli_error($con));
}
// }
mysqli_close($con);
