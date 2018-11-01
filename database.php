<?php

//connect to mysql
$con =mysqli_connect("localhost","root","","shoutit");

//test the connection
if(mysqli_connect_errno()){
    echo "failed to connect:".mysqli_connect_error();
}


?>