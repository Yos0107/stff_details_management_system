<?php
session_start();
require_once('data.php');
$profile = $_SESSION['email'];

$showdata = ("SELECT * FROM `details` WHERE Email = '$profile'");
$show =  mysqli_query($conn, $showdata);

$row = mysqli_fetch_assoc($show);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSs/profile.css">
    <title>Document</title>
</head>

<body>
    <?php include('menu.php'); ?>

    <div class="profile-container" style="padding-top: 60px;">
        <div class="control-label photo-label">
            <img src="https://us04st2.zoom.us/static/93873/image/user.png" alt="изменить изображение профиля">
        </div>
        <div class="form-control-static">
            <p class="fullName">

                <?php
                echo $row['First Name'];
                ?>
            </p>
        </div>
    </div>

    <div class="profile-container">
        <div class="control-label">Phone Number<br>Position</div>
        <div class="form-control-static">
            <p class="Mnumber">
                <?php
                echo $row["Phone Number"];
                ?>
            </p>
            <p class="Murl">
                <?php
                echo $row["Position"];
                ?>
            </p>
        </div>
    </div>
    <div class="profile-container">
        <div class="control-label">Email Address <br>Address <br> Joined Date <br> Hobbies<br></div>
        <div class="form-control-static">
            <p class="email">
                <?php
                echo $_SESSION["email"];
                ?>
            </p>
            <p class="Murl">
                <?php
                echo $row["Address"];
                ?>
            </p>
            <p class="Murl">
                <?php
                echo $row["Joined Date"];
                ?>
            </p>
            <p class="Murl">
                <?php
                echo $row["Hobbies"];
                ?>
            </p>
        </div>

    </div>

</body>

</html>