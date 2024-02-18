<?php

session_start();
if (!isset($_SESSION['name'])) {
    header("Location: http://localhost/php_project/menu_bar/login.php");
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER RECORDS</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<style>

</style>

<body>
    <div class="hero">
        <nav>
            <a href="./view.php">
                <img src="./img/logo.png" class="logo">
            </a>
            <!-- <h2>sudhir</h2> -->
            <ul>
                <li><a href="./view.php">Home</a></li>
                <li><a href="./add.php">New User</a></li>
                <li><a href="./delete_user.php">Delete</a></li>
                <li><a href="./update_user.php">Update</a></li>
            </ul>

            <img src="./img/user.png" class="user-pic" onclick="toggleMenu()">

            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="./img/user.png" alt="">
                        <h6>Welcom:
                            <?php
                            echo $_SESSION['name'];
                            ?>
                        </h6>
                    </div>
                    <hr>
                    <a href="#" class="sub-menu-link">
                        <img src="./img/profile.png" alt="">
                        <p>Edit Profile</p>
                        <span> &gt;</span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <img src="./img/setting.png" alt="">
                        <p>Setting & Privacy</p>
                        <span> &gt;</span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <img src="./img/help.png" alt="">
                        <p>Help & Support</p>
                        <span> &gt;</span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <img src="./img/logout.png" alt="">
                        <!-- <p>Logout</p> -->
                        <p style="position: absolute; bottom:2rem;right:11.4rem;font-size:large;">
                            <a style="color:#525252;   text-decoration: none;" href="logout.php">Logout</a>
                        </p>
                        <!-- <span> &gt;</span> -->
                    </a>
                </div>
            </div>
        </nav>
    </div>

</body>
<script>
    let subMenu = document.getElementById("subMenu");

    function toggleMenu() {
        subMenu.classList.toggle("open-menu");
    }
</script>

</html>