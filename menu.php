<?php

include('data.php');

?>
<header class="header" style="position:top;">
    <link rel="stylesheet" href="./CSs/menu.css">
    <a href="" class="logo">Logo</a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
        <li><a href="form.php">Home Page</a></li>
        <li><a href="stafflist.php">Staff List</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li>
            <?php
            if (!isset($_SESSION['email'])) {
                header("Location: index.php");
                die();
            }
            ?>
            <a href="#" style="color:green" name="checkname">
                <?php
                echo $_SESSION["email"];
                ?>
            </a>
        </li>
        <li>
            <a href="logout.php" style="color:red">Log Out</a>
        </li>
    </ul>
</header>