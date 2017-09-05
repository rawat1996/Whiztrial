<?php
// $con= mysqli_connect('localhost','root','')or die('database connection not established');
// mysqli_select_db($con,'whiztrial') or die('Database not found');
$servername = "localhost";
$username = "root";
$password = "";
$db= "whiztrial";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>