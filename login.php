<?php
$login = 0;
$invalid = 0;
include "./include/connect.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `registration` where name='$name'and password='$password'";
    $result = mysqli_query($con, $query);
    if ($result) {
        $num = mysqli_fetch_assoc($result);
        if ($num > 0) {
            // echo "successfully login";
            $login = 1;
            session_start();
            $_SESSION['name'] = $name;
            // header("Location: http://localhost/php_project/menu_bar/include/index.php");
            header("Location:view.php");
        } else {
            $invalid = 1;
?>
<script>
alert("Invalid Details");
</script>
<?php

        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>form</title>
    <link rel="stylesheet" href="./css/all_css.css">

</head>
<style>
body {
    background-color: lightgrey;
}
</style>

<body>
    <div class="container mt-5">
        <div class="row ">
            <div class="col-md-12 d-flex justify-content-center ">
                <div class="col-md-5  p-5 shadow-lg rounded bg-white border border-danger">
                    <h1 class="text-center text-dark shadow bg-info rounded p-2">Log In</h1>
                    <hr>
                    <form action="" method="post" name="myform" onsubmit="return valid()">
                        <div class="mb-3">
                            <label for="name" class="form-label text-primary">Name</label>
                            <input type="text" class="form-control border-info text-primary" name="name"
                                placeholder="John Deo">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label text-primary">Password</label>
                            <input type="password" name="password" class="form-control border-info"
                                placeholder="john@123">
                        </div>
                        <div class="mb-3">

                            <p> <input type="checkbox" onclick="hide()" id="mycheck"
                                    placeholder="john@123">&nbsp;&nbsp;<a href="#" class="text-decoration-none"> Tearms
                                    and Conditions</a>
                            </p>
                        </div>

                        <div class="row">
                            <div class="col-md-2"> <input type="submit" style="display: none;" id="btnhide"
                                    name="submit" class="btn btn-success"></div>
                            <div class="col-md-10 mt-2">
                                <p>&nbsp;If You Don't Have
                                    Account -> &nbsp;<a href="index.php" class="">Sign Up</a> </p>
                            </div>
                            <a href="./include/help.php" class="text-center">HELP ?</a>
                            <a href="./include/help.php" class="text-decoration-none text-center">18-feb&copy;2024
                                By Sudhir Prajapati</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
    // tearms and conditions and if check box is checked then submit button show neither hide
    function hide() {
        let checkbox = document.getElementById("mycheck");
        let btn = document.getElementById("btnhide");
        if (checkbox.checked == true) {
            btn.style.display = "block";
        } else {
            btn.style.display = "none";
        }
    }


    // form validations
    function valid() {
        let name = document.myform.name.value;
        let password = document.myform.password.value;

        if (name == null || name == "") {
            alert('Enter You Name');
            return false;
        }
        if (password == null || password == "") {
            alert("Password must be required");
            return false;
        }
        if (password.length != 6) {
            alert("Password must be 6 Digits");
            return false;
        }
        // $login = 1;
        // alert("successfull Login");
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>