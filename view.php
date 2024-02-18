<?php
include 'header.php';
include './include/connect.php';

$query = "SELECT * FROM `crud_operation`";
$result = mysqli_query($con, $query);
$data = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curd Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/all_css.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="col-md-12 shadow-lg rounded p-4 bg-white">
                    <h1 class="text-center text-dark bg-info p-2 shadow rounded"><i>ALL RECORD DATA</i></h1>
                    <hr>
                    <a href="add.php" class="btn btn-warning">Add New +</a>
                    <a href="./include/help.php" style="float: right;" class="text-decoration-none text-center">18-feb&copy;2024
                        By Sudhir Prajapati</a>
                    <hr>
                    <table class="table table-hover bordered">
                        <tr class="bg-dark text-white shadow p- lead">
                            <td>ID</td>
                            <td>Name</td>
                            <td style="width: 30%;">Email</td>
                            <td>Mobile</td>
                            <td style="width: 15%;">Password</td>
                            <td style="width: 3%;">Update</td>
                            <td style="width: 3%;">Delete</td>
                        </tr>
                        <?php

                        if ($data) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['mobile']; ?></td>
                                    <td><?php echo $row['password']; ?></td>
                                    <td>
                                        <a class="btn btn-success" href="update.php?id=<?php echo $row['id']; ?>">Update</a>
                                    </td>
                                    <td><a onclick="return confirm('Are You Sure Want To Delete ?')" class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                                    </td>

                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>