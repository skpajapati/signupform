<?php
$user = 0;
$success = 0;
include './include/connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    // $query = "INSERT INTO `registration`(name,email,mobile,password) VALUES('$name','$email','$mobile','$password')";
    // $result = mysqli_query($con, $query);
    // if ($result) {
    //     echo "inserted successfully";
    // } else {
    //     echo die(mysqli_error($con));
    // }

    $query = "SELECT * FROM `registration` where name='$name'";
    $result = mysqli_query($con, $query);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
?>
            <script>
                $user = 1;
                alert("User Already Exits");
            </script>
<?php
        } else {
            $query = "INSERT INTO `registration`(name,email,mobile,password) VALUES('$name','$email','$mobile','$password')";
            $result = mysqli_query($con, $query);

            if ($result) {
                $success = 1;
                header("location:login.php");
            } else {
                echo die(mysqli_error($con));
            }
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                    <h1 class="text-center text-dark bg-info p-2 rounded shadow">Sing Up</h1>
                    <hr>
                    <form action="" method="post" name="validform" onsubmit="return valid()">
                        <div class="mb-3">
                            <label for="name" class="form-label text-primary">Name</label>
                            <input type="text" class="form-control border-info" name="name" placeholder="John Deo">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-primary">Email </label>
                            <input type="email" name="email" class="form-control border-info text-primary" placeholder="JohnDeo@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="mobile" class="form-label text-primary">Mobile </label>
                            <input type="text" name="mobile" class="form-control border-info text-primary" placeholder="9999912345">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label text-primary text-primary">Password</label>
                            <input type="password" name="password" class="form-control border-info" placeholder="john@123">
                        </div>
                        <div class="mb-3">

                            <p> <input type="checkbox" onclick="hide()" id="mycheck" placeholder="john@123">&nbsp;&nbsp;<a href="#" class="text-decoration-none"> Tearms
                                    and Conditions</a>
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-2"> <input type="submit" style="display: none;" id="btnhide" name="submit" class="btn btn-success"></div>
                            <div class="col-md-10 mt-2">
                                <p>&nbsp;If You Have Already Account ->
                                    &nbsp;<a href="login.php" class="">Log In</a> </p>
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
        // if checkbox is checked than submit buttom is show Neither submit buttom is hidden

        function hide() {
            let checkbox = document.getElementById("mycheck");
            let btn = document.getElementById("btnhide");

            if (checkbox.checked == true) {
                btn.style.display = "block";
            } else {
                btn.style.display = "none";
            }
        }

        // //form validation
        function valid() {
            let name = document.validform.name.value;
            let email = document.validform.email.value;
            let mobile = document.validform.mobile.value;
            let password = document.validform.password.value;

            if (name == null || name == "") {
                alert("Name Can't be Blank.");
                return false;
            }
            if (email == null || email == "") {
                alert("Email Can't be Blank.")
                return false;
            }
            if (mobile == null || mobile == "") {
                alert("Enter Your Mobile Number.");
                return false;
            }
            if (mobile.length != 10) {
                alert("Mobile Number Must be 10 Digits.");
                return false;
            }
            if (password == null || password == "") {
                alert("Password Can't be Blank.");
                return false;
            }
            if (password.length > 6) {
                alert("Password Must be 6 Digits");
                return false;
            }

            alert("Successfull Sign Up");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>