<?php
include './include/connect.php';
include './header.php';
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM `crud_operation` WHERE id='$id'";
    $result = mysqli_query($con, $query);
    if ($result) {
?>
<script>
alert("Delete Record");
window.open("http://localhost/php_project/menu_bar/view.php");
</script>
<?php
    } else {
        echo die(mysqli_error($con));
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
    <title>Crud Operation</title>
    <link rel="stylesheet" href="./css/all_css.css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12  d-flex justify-content-center">
                <div class="col-md-6 p-4 shadow-lg rounded bg-white  border">
                    <h1 class="text-center bg-info rounded shadow text-white"><i>Delete Records</i></h1>
                    <form action="" method="post">
                        <div class="form-group justify-content-center d-flex">
                            <label for="">
                                <h4 class="p-2 rounded text-shadow">Enter Id Number</h4>
                                <input type="text" name="id" class="form-control border-info">
                            </label><br>

                        </div>
                        <div class="form-group justify-content-center d-flex mt-3">
                            <input type="submit" onclick="return confirm('Are You Sure You Want To Delete ?')"
                                name="submit" class="btn btn-danger" value="DELETE">
                        </div>
                        <a href="./include/help.php" class="text-decoration-none text-center">18-feb&copy;2024
                            By Sudhir Prajapati</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>