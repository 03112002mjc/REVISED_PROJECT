<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "notebook";

// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    echo "Connection Failed!";
}
return $conn;
?>
