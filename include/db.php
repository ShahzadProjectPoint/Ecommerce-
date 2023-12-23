<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name="ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($conn) {
//   echo "Connection Succesful";
}else{
    echo "Connection Failed";
}
?>