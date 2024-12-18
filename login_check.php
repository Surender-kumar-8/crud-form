<?php 
include_once("connection.php");
session_start();
$email = $_POST['eml'];
$password = $_POST['pwd'];

$sql = "SELECT * FROM tech where email = '$email' AND password = '$password'";

$result = mysqli_query($conn,$sql);

$numRow = mysqli_num_rows($result);

if($numRow != 0){
    $userdata = mysqli_fetch_assoc($result);
    $_SESSION['user_email'] = $email;
    $_SESSION['user_id'] = $userdata['id'];
    $_SESSION['user_data'] = $userdata;
    header("location:login_das.php");
}else{
    header("location:login.php?error=Access Denied".mysqli_connect_error());
}
?>