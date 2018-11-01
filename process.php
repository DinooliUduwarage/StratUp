<?php
include 'database.php';

// cheack if the form is submitted
if(isset($_POST['submit'])){
   $user = mysqli_real_escape_string($con,$_POST['user']) ;
   $msg = mysqli_real_escape_string($con,$_POST['message']) ;


//set timeZone
date_default_timezone_set('America/New_York');
$time = date('h:i:s a',time());

//validate the input
if(!isset($user)  || $user == '' || !isset($msg) || $msg == ''){
$error = "please fill the info!";
header("Location:index.php?error=".urlencode($error));
exit();

}

else{
    $query = "INSERT INTO shouts (USER,MESSAGE,TIME)
    VALUES('$user','$msg','$time')";
    
    if(!mysqli_query($con,$query)){
        die('error: '.mysqli_error($con));
    }
    else{
        header("Location:index.php");
        exit();
    }
}
}
?>