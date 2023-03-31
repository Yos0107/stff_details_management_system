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
    <link rel="stylesheet" href="./CSS/menu.css">
    <link rel="stylesheet" href="./CSS/form.css">
    <title>Document</title>
</head>
<?php include('menu.php'); ?>


<body>
    <?php
    if (isset($_POST['updatebutton'])) {

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $user_email = $_POST['user_email'];
        $position_dropdown = $_POST['position_dropdown'];
        $birth = $_POST['birth'];
        $joindate = $_POST['joindate'];
        $staff_address = $_POST['staff_address'];
        $user_number = $_POST['user_number'];
        $gender = $_POST['staffgender'];
        $father_name = $_POST['father_name'];
        $pan_number = $_POST['pan_number'];
        $hobby = $_POST['hobby'];


        if (empty($lastname)) {
            $emptylasttname = "Enter Firstname";
        }
        if (empty($user_email)) {
            $emptyuseremail = "Enter Lastname";
        }
        if (empty($position_dropdown)) {
            $emptyposition = "Select Any Position";
        }
        if (empty($birth)) {
            $emptybirth = "Select Date of Birth";
        }
        if (empty($joindate)) {
            $emptyjoindate = "Select Joining Date";
        }
        if (empty($staff_address)) {
            $emptyaddress = "Enter User Address";
        }
        if (empty($user_number)) {
            $emptyphonenumber = "Enter Phone Number";
        }
        if (empty($gender)) {
            $emptygender = "Select Gender";
        }
        if (empty($father_name)) {
            $emptyfathername = "Enter Father Name";
        }
        if (empty($pan_number)) {
            $emptypannumber = "Enter Pan Number";
        }
        if (empty($hobby)) {
            $emptyhobby = "Select Any Hobbies";
        }


        $sql = " UPDATE `details` SET `First Name` = '$firstname', `Last Name` = '$lastname', `Position` =
                '$position_dropdown', `Date of Birth` = '$birth', `Joined Date` = '$joindate', `Address` = '$staff_address', `Phone Number` = '$user_number', `Gender` = '$gender', `Father Name` = '$father_name', `Pan Number` = '$pan_number',
                `Hobbies` = '$hobby' WHERE `details`.`Email` = '$user_email'";

        $result = $conn->query($sql);
        if (empty($firstname)) {
            $emptyfirstname = "Enter Firstname";
        } elseif (!empty($result)) {
            echo "Your details has been update successfully";
            $_SESSION["First Name"] = "$firstname";
            $_SESSION['First Name'];
            $_SESSION["Address"] = "$staff_address";
            $_SESSION["Phone Number"] = "$user_number";
            $_SESSION["Position"] = "$position_dropdown";
            $_SESSION["Joined Date"] = "$joindate";
            $_SESSION["Hobbies"] = "$hobby";
        } else {

            echo "failed" . $conn->$error;
        }
    }
    ?>

    <div id="outside" style="padding-top:50px">
        <form id="staff-form" action="" method="POST" type="submit">
            <h1 id="title">Please Update Your Profile</h1>

            <fieldset>
                <legend>Personal Details</legend>
                <div>
                    <label id="first-name-label" for="first_name">First Name:</label>
                    <input type="text" id="firstname" name="firstname" placeholder="Enter First Name" value="<?php
                                                                                                                if (isset($firstname)) {
                                                                                                                    echo $firstname;
                                                                                                                }  ?>" />  
                    <?php
                    if (isset($emptyfirstname)) {
                        echo  "<span class = 'error-text'>" . $emptyfirstname . "</span>";
                    }
                    ?>

                </div>
                <div>
                    <label id="last-name-label" for="last_name">Last Name:</label>
                    <input type="text" id="lastname" name="lastname" placeholder="Enter Last Name" value="<?php
                                                                                                            if (isset($lastname)) {
                                                                                                                echo $lastname;
                                                                                                            }  ?>" />  
                    <?php
                    if (isset($emptylasttname)) {
                        echo  "<span class = 'error-text'>" . $emptylasttname . "</span>";
                    }
                    ?>

                </div>
                <div>
                    <label id="email-label" for="email">Email:</label>

                    <input type="email" id="email" name="user_email" placeholder="Enter Email address" value="<?php
                                                                                                                if (isset($user_email)) {
                                                                                                                    echo $user_email;
                                                                                                                }  ?>" />
                    <?php
                    if (isset($emptyuseremail)) {
                        echo  "<span class = 'error-text'>" . $emptyuseremail . "</span>";
                    }
                    ?> 

                </div>
                <!-- Dropdown for postion -->

                <div>
                    <label for=" position_dropdown">Position:</label>
                    <select id="position_dropdown" name="position_dropdown" value="<?php
                                                                                    if (isset($position_dropdown)) {
                                                                                        echo $position_dropdown;
                                                                                    }  ?>">
                        <option value=""></option>
                        <option value="Front End">Front End Developer</option>
                        <option value="Back End">Back End Developer</option>
                        <option value="UI">UI/UX Designer</option>
                        <option value="seo">SEO</option>
                    </select>
                    <?php
                    if (isset($emptyposition)) {
                        echo  "<span class = 'error-text'>" .
                            $emptyposition . "</span>";
                    }
                    ?>

                </div>
                <div>
                    <label for="date-of-birth">Date of Birth:</label>
                    <input type="date" name="birth" value="<?php
                                                            if (isset($birth)) {
                                                                echo $birth;
                                                            }  ?>" />
                    <?php
                    if (isset($emptybirth)) {
                        echo  "<span class = 'error-text'>" . $emptybirth . "</span>";
                    }
                    ?>

                </div>
                <div>
                    <label for="join-date">Joined Date:</label>
                    <input type="date" name="joindate" value="<?php
                                                                if (isset($joindate)) {
                                                                    echo $joindate;
                                                                }  ?>" />
                    <?php
                    if (isset($emptyjoindate)) {
                        echo  "<span class = 'error-text'>" . $emptyjoindate . "</span>";
                    }
                    ?>

                </div>

                <div>
                    <label for="address-label">Address:</label>
                    <input type="Address" id="address" name="staff_address" placeholder="Enter address here" value="<?php
                                                                                                                    if (isset($staff_address)) {
                                                                                                                        echo $staff_address;
                                                                                                                    }  ?>" />  
                    <?php
                    if (isset($emptyaddress)) {
                        echo  "<span class = 'error-text'>" . $emptyaddress . "</span>";
                    }
                    ?>

                </div>

                <div>
                    <label id="number-label" for="phone">Phone Number:</label>
                    <input id="number" name="user_number" placeholder="Enter 10 digit number" value="<?php
                                                                                                        if (isset($user_number)) {
                                                                                                            echo $user_number;
                                                                                                        }  ?>" /> 
                    <?php
                    if (isset($emptyphonenumber)) {
                        echo  "<span class = 'error-text'>" . $emptyphonenumber . "</span>";
                    }
                    ?>

                </div>
                <!-- -----------------Radio Buttons--------------------------- -->
                <div>
                    <label for="gender">Gender:</label>

                    <input type="radio" name="staffgender" value="Male"> Male
                    <input type="radio" name="staffgender" value="Female"> Female
                    <?php
                    if (isset($emptygender)) {
                        echo  "<span class = 'error-text'>" . $emptygender . "</span>";
                    }
                    ?>


                </div>
                <div>
                    <label for="father-name-label">Father Name:</label>
                    <input type="text" id="fathername" name="father_name" placeholder="Enter Father Name" value="<?php
                                                                                                                    if (isset($father_name)) {
                                                                                                                        echo $father_name;
                                                                                                                    }  ?>" />
                     
                    <?php
                    if (isset($emptyfathername)) {
                        echo  "<span class = 'error-text'>" . $emptyfathername . "</span>";
                    }
                    ?>

                </div>

                <div>
                    <label id="pan" for="pan">Pan Number:</label>
                    <input type="number" id="pan" name="pan_number" placeholder="Enter Pan number" value="<?php
                                                                                                            if (isset($pan_number)) {
                                                                                                                echo $pan_number;
                                                                                                            }  ?>" /> 
                    <?php
                    if (isset($emptypannumber)) {
                        echo  "<span class = 'error-text'>" .  $emptypannumber . "</span>";
                    }
                    ?>

                </div>

            </fieldset>
            <!-- ------------------Checkboxes-------------------------------- -->
            <fieldset>
                <label for="hobbies">Hobbies</label>
                <p>
                    <input type="checkbox" name="hobby" value="Singing"> Singing
                    <input type="checkbox" name="hobby" value="Playing Football"> Playing Football
                    <input type="checkbox" name="hobby" value="Watch Movies & Series"> Watch Movies & Series<br>
                    <input type="checkbox" name="hobby" value="Dancing Solo">Dancing Solo
                    <input type="checkbox" name="hobby" value="Code Hello World!"> Code Hello World!
                    <input type="checkbox" name="hobby" value="Why Not Sleep?"> Why Not Sleep?
                </p>
                <?php
                if (isset($emptyhobby)) {
                    echo  "<span class = 'error-text'>" .  $emptyhobby . "</span>";
                }
                ?>

            </fieldset>
            <!-- --------------------Text Areas------------------------------ -->

            <div>
                <input type="submit" id="update_button" name="updatebutton" value="Update Profile" style=" border-radius: 20px;
                    border: 1px solid #ff4b2b;
                    background-color: #ff4b2b;
                    color: #ffffff;
                    font-size: 12px;    
                    font-weight: bold;
                    padding: 12px 45px;
                    letter-spacing: 1px;
                    text-transform: uppercase;
                    transition: transform 80ms ease-in;">

            </div>

        </form>
    </div>

</body>

</html>