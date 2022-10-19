<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";

//creating connection
//$servername, $username, $password
$conn = mysqli_connect("localhost","root","","brandingurus");

//checking connection
if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}
echo "connected succesfully";
?>