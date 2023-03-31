<?php
// error_reporting(0);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$host = "localhost";
$username = "root";
$password = "";
$dbname = "staff_management_yoseph";
$conn = mysqli_connect($host, $username, $password, $dbname);

if ($conn) {
} else {
    echo "Not connected" . mysqli_connect_error();
}
