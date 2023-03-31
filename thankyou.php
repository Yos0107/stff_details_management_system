<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSs/menu.css">

    <title>Document</title>
</head>
<header class="header">
    <a href="" class="logo">Logo</a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
        <li><a href="http://localhost/Staff-Management-YosephTamang/form.php">Home Page</a></li>
        <li><a href="http://localhost/Staff-Management-YosephTamang/table.php">Staff List</a></li>
        <li><a href="http://localhost/Staff-Management-YosephTamang/profile.php">Profile</a></li>
        <li><a href="#">Login</a></li>

    </ul>
</header>

<body>
    <h1 style="padding-top: 60px;">Thank you
        <?php
        echo "$_POST[firstname]";
        ?>
        for filling up the form

    </h1>

</body>

</html>