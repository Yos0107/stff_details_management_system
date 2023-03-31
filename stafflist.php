<?php
session_start();
require_once('data.php');
$query = ("SELECT * FROM details");
$results =  mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSs/table.css">



    <title>Document</title>
</head>
<?php include('menu.php'); ?>


<body>

    <h2 style="color:black;text-align:center;font-family: Montserrat,sans-serif; font-weight:bold;padding-top: 60px">
        List of Staff
    </h2>


    <table role="grid" summary="List of staff details">

        <tr>
            <th scope="col">SN</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email Address</th>
            <th scope="col">Postion</th>
            <th scope="col">DOB</th>
            <th scope="col">Joined Date</th>
            <th scope="col">Address</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Gender</th>
            <th scope="col">Fathers Name</th>
            <th scope="col">Pan Number</th>
        </tr>

        <tr>
            <?php
            while ($row = mysqli_fetch_assoc($results)) {

            ?>

            <td>
                <?php
                    echo ($row['ID']);
                    ?>
            </td>
            <td>
                <?php
                    echo ($row['First Name']);
                    ?>

            </td>
            <td>
                <?php
                    echo ($row['Last Name']);
                    ?>
            </td>
            <td>
                <?php
                    $id = $row['ID'];
                    ?>
                <a href="fromlist.php?id=<?php echo $id; ?>">
                    <?php
                        echo ($row['Email']);
                        ?>

                </a>

            </td>
            <td>
                <?php
                    echo ($row['Position']);
                    ?>
            </td>
            <td>
                <?php
                    echo ($row['Date of Birth']);
                    ?>
            </td>
            <td>
                <?php
                    echo ($row['Joined Date']);
                    ?>
            </td>
            <td>
                <?php
                    echo ($row['Address']);
                    ?>
            </td>
            <td>
                <?php
                    echo ($row['Phone Number']);
                    ?>
            </td>
            <td>
                <?php
                    echo ($row['Gender']);
                    ?>
            </td>
            <td>
                <?php
                    echo ($row['Father Name']);
                    ?>
            </td>
            <td>
                <?php
                    echo ($row['Pan Number']);
                    ?>
            </td>

        </tr>

        <?php

            }

    ?>

    </table>
</body>

</html>

<!-- INSERT INTO `details` (`ID`, `First Name`, `Last Name`, `Email`, `Position`, `Date of Birth`, `Joined Date`, `Address`, `Phone Number`, `Gender`, `Father Name`, `Pan Number`, `Hobbies`) VALUES (NULL, 'jiso', 'kim', 'jios@gmail.com', 'fontend developer', 'may 12, 2002', 'march 1, 2023', 'baluwatar', '989876765', 'female', 'hey kim', '989898', 'playing'); -->