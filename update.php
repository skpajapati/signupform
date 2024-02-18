<?php
include './include/connect.php';
include 'header.php';
$id = $_GET['id'];
$query = "SELECT * FROM `crud_operation` where id='$id'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $query = "UPDATE `crud_operation` set name='$name',email='$email',mobile='$mobile',password='$password' where id='$id'";
    $result = mysqli_query($con, $query);
    if ($result) {
        // echo "successfully submitted";
        header("location:view.php");
        echo $id;
    } else {
        echo die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curd Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/all_css.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="col-md-6 p-5 shadow-lg rounded">
                    <h1 class="text-center text-dark" style="color:blue">RECORD</h1>
                    <hr>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label class="form-label text-primary">Name</label>
                            <input type="text" value="<?php echo $row['name']; ?>"
                                class="form-control border-info text-primary" name="name" placeholder="John Deo">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-primary">Email</label>
                            <input type="email" value="<?php echo $row['email']; ?>"
                                class="form-control border-info text-primary" name="email"
                                placeholder="JohnDeo@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-primary">Mobile</label>
                            <input type="text" value="<?php echo $row['mobile']; ?>"
                                class="form-control border-info text-primary" name="mobile" placeholder="9999999990">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-primary">password</label>
                            <input type="password" value="<?php echo $row['password']; ?>"
                                class="form-control border-info text-primary" name="password" placeholder="JohnDeo@321">
                        </div>
                        <div class="mb-3">

                            <input type="submit" class="btn btn-primary" name="submit">
                            <a href="view.php" class="btn btn-success">view</a>
                        </div>
                        <a href="./include/help.php" class="text-decoration-none text-center">18-feb&copy;2024
                            By Sudhir Prajapati</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>