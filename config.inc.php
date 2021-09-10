<?php
$servername="localhost";
$username="root";
$password="Jayce9596!";
$db="cic";

//start connection
$conn=mysqli_connect($servername,$username,$password,$db);

//checking connection
if (!$conn) {
        die("connection failed".mysqli_connect_error());
}else

//echo "connected successful";

 ?>