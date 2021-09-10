<?php
$servername="localhost";
$username="root";
$password="Jayce9596!";
$db="cicapp";

//start connection
$conn=mysqli_connect($servername,$username,$password,$db);



//receive data from the application using the tags or keys
$fullname = $_REQUEST['fullname'];
$email = $_REQUEST['email'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$sql = "INSERT INTO `user` (`user_id`, `fullname`, `email`, `username`, `password`) VALUES (NULL, '$fullname' ,'$email', '$username', '$password')";

//execute the sql query and check the results
$query_run=mysqli_query($conn,$sql);

        if($query_run)
                {
                        echo "1";
                }
        else
                {
                        echo "0";
                }
?>


