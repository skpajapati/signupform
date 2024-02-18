<?php
include './include/connect.php';
include './header.php';

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
    <link rel="stylesheet" href="./css/all_css.css">
    <title>User Update</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12  d-flex justify-content-center">
                <div class="col-md-6 p-4 shadow-lg rounded bg-white ">
                    <h1 class="text-center bg-info rounded shadow text-white"><i>Update Records</i></h1>
                    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group justify-content-center d-flex">
                            <label for="">
                                <h4 class="p-2 rounded text-shadow">Enter Id Number</h4>
                                <input type="text" name="id" class="form-control border-info">
                            </label><br>

                        </div>
                        <div class="form-group justify-content-center d-flex mt-3">
                            <input type="submit" name="showbtn" class="btn btn-warning" value="SHOW">
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['showbtn'])) {
                        $id = $_POST['id'];

                        $query = "SELECT * FROM `crud_operation` WHERE id='$id'";
                        $result = mysqli_query($con, $query);
                        $num = mysqli_num_rows($result);

                        if ($num) {
                            while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <!-- update form start here   -->
                    <form action="updatedata.php" method="post" class="post-form">
                        <div class="form-group">
                            <label for="" class="text-secondary">Id</label>
                            <input type="text" value="<?php echo $row['id']; ?>" name="id" class="form-control ">
                        </div>
                        <div class="form-group">
                            <label for="" class="text-secondary">Name</label>
                            <input type="text" value="<?php echo $row['name']; ?>" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="text-secondary">Email</label>
                            <input type="email" value="<?php echo $row['email'] ?>" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="text-secondary">Mobile</label>
                            <input type="text" value="<?php echo $row['mobile']; ?>" name="mobile" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="text-secondary">Password</label>
                            <input type="password" value="<?php echo $row['password']; ?>" name="password"
                                class="form-control">
                        </div>
                        <div class="form-group d-flex justify-content-center m-4">
                            <input type="submit" name="submit" value="update" class="btn btn-primary">
                        </div>
                    </form>
                    <?php
                            }
                        }
                    }
                    ?>

                    <a href="./include/help.php" class="text-decoration-none text-center">18-feb&copy;2024
                        By Sudhir Prajapati</a>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>