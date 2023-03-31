<?php
session_start();
include('data.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSs/login.css">
    <title>Document</title>
</head>

<body>
    <?php

    if (isset($_POST['login_button'])) {

        $user_email = htmlspecialchars($_POST['user_email']);
        $userpassword = $_POST['password'];


        if (empty($userpassword)) {
            $emptypassword = "Enter Password";
        }

        $emailcheck = "SELECT * FROM details WHERE Email = '$user_email'";
        $emailresult = mysqli_query($conn, $emailcheck);
        $emailcount = mysqli_num_rows($emailresult);

        if (empty($user_email)) {
            $emptyemail = "Enter Email";
        } else if ($emailcount > 0) {
            $passwordcheck = "SELECT * FROM details WHERE Password = '$userpassword'";
            $passwordresult = mysqli_query($conn, $passwordcheck);
            $passwordcount = mysqli_num_rows($passwordresult);
            if ($passwordcount > 0) {
                echo $_SESSION["email"] = "$user_email";
                header("Location: form.php");
            } else {
                $emptypassword = "Incorrect Password";
            }
        } else {
            $emptyemail = "Email Not found";
        }
    }
    ?>
    <h2>Staff Management System</h2>
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="" type="submit" method="POST" name="loginform">
                <h1>Sign in</h1>
                <input type="email" placeholder="Email" name="user_email" id="user_email" value="<?php
                                                                                                    if (isset($user_email)) {
                                                                                                        echo $user_email;
                                                                                                    }  ?>" />
                <?php
                if (isset($emptyemail)) {
                    echo $emptyemail;
                }
                ?>
                <input type="password" name="password" id="password" placeholder=" Password " />
                <?php
                if (isset($userpassword)) {
                    echo $emptypassword;
                }
                ?>
                <input type="submit" id="checklogin" name="login_button" value="Log In" style=" border-radius: 20px;
                    border: 1px solid #ff4b2b;
                    background-color: #ff4b2b;
                    color: #ffffff;
                    font-size: 12px;
                    font-weight: bold;
                    padding: 12px 45px;
                    letter-spacing: 1px;
                    text-transform: uppercase;
                    transition: transform 80ms ease-in;">
                <a href="http://localhost/Staff-Management-YosephTamang/register.php">Don't Have an account??</a>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1">Login to see the staff details</h1>
                </div>
            </div>
        </div>
    </div>
</body>

</html>