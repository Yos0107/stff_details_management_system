<?php
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
    if (!empty($_POST['signup_button'])) {

        $user_email = $_POST['user_email'];
        $registerpassword = $_POST['password'];
        $cpassword = $_POST['cpassword'];


        if (empty($registerpassword)) {
            $emptypassword = "Enter Password";
        }
        if (empty($cpassword)) {
            $emptycpassword = "Enter Confirm Password";
        }

        $query = "SELECT `Email` FROM `details` WHERE `Email` ='$user_email'";
        $fire = mysqli_query($conn, $query);
        if (empty($user_email)) {
            $emptyemail = "Enter Email";
        } elseif (mysqli_num_rows($fire) > 0) {
            $emptyemail = "This email already exits";
        } else {

            if ($registerpassword == $cpassword) {
                $registerpassword = $cpassword;
                $insert = "INSERT INTO `details` (`ID`, `First Name`, `Last Name`, `Email`, `Password`, `Position`, `Date of Birth`, `Joined Date`, `Address`, `Phone Number`, `Gender`, `Father Name`, `Pan Number`, `Hobbies`) VALUES (NULL, '', '', '$user_email', '$registerpassword', '', '', '', '', NULL, '', '', NULL, '')";

                $register = $conn->query($insert);
                echo "$register";
                if ($register) {

                    echo " Your account has been created successfully";
                }
            } else {
                $emptycpassword =  "Password must be same";
            }
        }
    }


    ?>
    <h2>Staff Management System</h2>
    <div class="container" id="container">

        <div class="form-containers sign-in-container">
            <h1 style="text-align:center; padding: 100px;">Easily create an account</h1>
        </div>

        <form action="#" type="submit" method="POST" name="registerbutton">
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <input type="email" id="email" name="user_email" placeholder="Email" value="<?php
                                                                                                    if (isset($user_email)) {
                                                                                                        echo $user_email;
                                                                                                    }  ?>" />
                        <?php
                        if (isset($emptyemail)) {
                            echo $emptyemail;
                        }
                        ?>
                        <input type="password" id="password" name="password" placeholder="Password" value="<?php
                                                                                                            if (isset($registerpassword)) {
                                                                                                                echo $registerpassword;
                                                                                                            }  ?>" />
                        <?php
                        if (isset($emptypassword)) {
                            echo  "<span class = 'error-text'>" .  $emptypassword . "</span>";
                        }
                        ?>
                        <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" value="<?php
                                                                                                                        if (isset($cpassword)) {
                                                                                                                            echo $cpassword;
                                                                                                                        }  ?>" />
                        <?php
                        if (isset($emptycpassword)) {
                            echo  "<span class = 'error-text'>" .  $emptycpassword . "</span>";
                        }
                        ?>
                        <!-- <button class="ghost" id="signUp" type="submit" name="submit">Sign Up</button> -->
                        <input type="submit" name="signup_button" value="Sign Up" style=" border-radius: 20px;
                            border: 1px solid #ff4b2b;
                            background-color: #fff;
                            color: #ff3b4b;
                            font-size: 12px;
                            font-weight: bold;
                            padding: 12px 45px;
                            letter-spacing: 1px;
                            text-transform: uppercase;
                            transition: transform 80ms ease-in;">
                        <a href="index.php" style="text-decoration:underline">Already have an account??</a>

                    </div>
                </div>
            </div>

        </form>

    </div>

</body>

</html>