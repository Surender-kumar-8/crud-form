<?php
session_start();
include("connection.php");

$name = $_POST['fname'];
$fathername = $_POST['ffname'];
$dob = $_POST['dob'];
$email = $_POST['eml'];
$password = $_POST['pwd'];
$tech = $_POST['tech'];
$query = $_POST['des'];     
// $gender = $_POST['gen'];

$_SESSION['error'] = [];

if (isset($_POST['gen'])) {
    $gender = $_POST['gen'];
}

if(isset($_POST['lang']) && !empty($_POST['lang'])){
    $lang = $_POST['lang'];
    $lang1 = implode(",",$lang);
}else{
    $_SESSION['error']['lang1_error'] = "*Must select at least one";
}


if (isset($name) && empty($name)) {
    $_SESSION['error']['name_error'] = "*Must be filled name";
}
if (isset($fathername) && empty($fathername)) {
    $_SESSION['error']['fname_error'] = "*Must be filled fanther name";
}
if(isset($dob) && empty($dob)){
    $_SESSION['error']['dob_error'] = "*Must be filled DOB";
}
if (isset($email) && empty($email)) {
    $_SESSION['error']['email_error'] = "*Must be filled email";
}
if (isset($password) && empty($password)) {
    $_SESSION['error']['password_error'] = "*Must be filled password";
}
if (isset($tech) && empty($tech)) {
    $_SESSION['error']['tech_error'] = "*Must be filled tech";
}
// echo '<pre>'; print_r($_SESSION['error']); die;

// if (isset($gender) && empty($_POST[$gender])) {
//     $_SESSION['error']['gender_error'] = "*Must be filled gender";
// }

if(isset($lang1) && empty($lang1)){
    $_SESSION['error']['lang1_error'] = "*Must select at least one";
}
if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
    header("location:registration.php");
}
else{
    $sql = "INSERT INTO tech(name,father_name,email,password,technology,gender,language,query)
    VALUES('$name','$fathername','$email','$password','$tech','$gender','$lang1','$query')";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        header("location:registration.php?error=Data not inserted." . mysqli_error($conn));
    } else {
        header("location:registration.php?success=Data inserted successfully.");
    }

}
   

