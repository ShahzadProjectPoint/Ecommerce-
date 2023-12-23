<?php

$servername = "localhost";
$username = "root";
$password = "";
$database="ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if($conn){
    // echo "Connection Succesfull";
}else{
    echo "Connection Failed";
}

?>