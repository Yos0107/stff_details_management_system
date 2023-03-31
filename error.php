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
    <link rel="stylesheet" href="./CSs/menu.css">
    <link rel="stylesheet" href="./CSs/form.css">
    <title>Document</title>
</head>

<body>
    <?php include('menu.php'); ?>

    <div id="outside" style="padding-top:50px">
        <form id="staff-form" action="" method="POST" type="submit">
            <h1 id="title">Please Update Your Profile</h1>

            <fieldset>
                <legend>Personal Details</legend>
                <div>
                    <label id="first-name-label" for="first_name">First Name:</label>
                    <input type="text" id="firstname" name="firstname" placeholder="Enter First Name">  
                </div>
                <div>
                    <label id="last-name-label" for="last_name">Last Name:</label>
                    <input type="text" id="lastname" name="lastname" placeholder="Enter Last Name">  

                </div>
                <div>
                    <label id="email-label" for="email">Email:</label>

                    <input type="email" id="email" name="user_email" placeholder="Enter Email address">  

                </div>
                <!-- Dropdown for postion -->

                <div>
                    <label for=" position_dropdown">Position:</label>
                    <select id="position_dropdown" name="position_dropdown">
                        <option value=""></option>
                        <option value="Front End">Front End Developer</option>
                        <option value="Back End">Back End Developer</option>
                        <option value="UI">UI/UX Designer</option>
                        <option value="seo">SEO</option>
                    </select>

                </div>
                <div>
                    <label for="date-of-birth">Date of Birth:</label>
                    <input type="date" name="birth">

                </div>
                <div>
                    <label for="join-date">Joined Date:</label>
                    <input type="date" name="joindate">

                </div>

                <div>
                    <label for="address-label">Address:</label>
                    <input type="Address" id="address" name="staff_address" placeholder="Enter address here">  

                </div>

                <div>
                    <label id="number-label" for="phone">Phone Number:</label>
                    <input id="number" name="user_number" placeholder="Enter 10 digit number"> 

                </div>
                <!-- -----------------Radio Buttons--------------------------- -->
                <div>
                    <label for="gender">Gender:</label>

                    <input type="radio" name="gender" value="Male"> Male
                    <input type="radio" name="gender" value="Female"> Female<br>


                </div>
                <div>
                    <label id="father-name-label" for="father_name">Father Name:</label>
                    <input type="text" id="father_name" name="father_name" placeholder="Enter Father Name">  

                </div>

                <div>
                    <label id="pan" for="pan">Pan Number:</label>
                    <input type="number" id="pan" name="pan_number" placeholder="Enter Pan number"> 

                </div>

            </fieldset>
            <!-- ------------------Checkboxes-------------------------------- -->
            <fieldset>
                <label for="hobbies">Hobbies</label>
                <p>
                    <input type="checkbox" name="hobby" value="Singing"> Singing
                    <input type="checkbox" name="hobby" value="Playing Football"> Playing Football
                    <input type="checkbox" name="hobby" value="Watching Movies & Series"> Watch Movies & Series<br>
                    <input type="checkbox" name="hobby" value="Dancing Solo">Dancing Solo
                    <input type="checkbox" name="hobby" value="Coding"> Code Hello World!
                    <input type="checkbox" name="hobby" value="Sleeping"> Why Not Sleep?
                </p>

            </fieldset>
            <!-- --------------------Text Areas------------------------------ -->

            <div>
                <input type="submit" id="updateprofile" name="update_button" value="Update Profile" style=" border-radius: 20px;
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
    <?php
    if (!empty($_POST['update_button'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $user_email = $_POST['user_email'];
        $position_dropdown = $_POST['position_dropdown'];
        $birth = $_POST['birth'];
        $joindate = $_POST['joindate'];
        $staff_address = $_POST['staff_address'];
        $user_number = $_POST['user_number'];
        $gender = $_POST['gender'];
        $father_name = $_POST['father_name'];
        $pan_number = $_POST['pan_number'];
        $hobby = $_POST['hobby'];


        $sql = " UPDATE `details` SET `First Name` = '$firstname', `Last Name` = '$lastname', `Position` =
                '$position_dropdown', `Date of Birth` = '$birth', `Joined Date` = '$joindate', `Address` = '$staff_address', `Phone Number` = '$user_number', `Gender` = '$gender', `Father Name` = '$father_name', `Pan Number` = '$pan_number',
                `Hobbies` = '$hobby' WHERE `details`.`Email` = '$user_email'";

        $result = $conn->query($sql);

        if (!empty($result)) {
            echo "Your details has been update successfully";
            echo $_SESSION["First Name"] = "$firstname";
            echo $_SESSION['First Name'];
            echo $_SESSION["Address"] = "$staff_address";
            echo $_SESSION["Phone Number"] = "$user_number";
            echo $_SESSION["Position"] = "$position_dropdown";
            echo $_SESSION["Joined Date"] = "$joindate";
            echo $_SESSION["Hobbies"] = "$hobby";
        } else {

            echo "failed" . $conn->$error;
        }
    }
    ?>
</body>

</html>