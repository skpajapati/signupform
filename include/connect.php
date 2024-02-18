<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "crudoperation";

$con = mysqli_connect($host, $user, $pass, $db);
if (!$con) {
    //     echo "successfull";
    // } else {
    echo die(mysqli_error($con));
}
