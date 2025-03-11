<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname  = "registrations";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
   //echo "Connection sucsessful";
}
else{
    echo "connection failed".mysqli_connect_error();
}
?>


