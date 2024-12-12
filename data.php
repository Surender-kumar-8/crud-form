<?php 
include ("connection.php");

$name = $_POST['fname'];
$fathername = $_POST['ffname'];
$email = $_POST['eml'];
$password = $_POST['pwd'];
$tech = $_POST['tech'];
$gender = $_POST['gen'];

$lang = $_POST['lang'];
 $lang1 =implode($lang); 

$query = $_POST['des'];

$sql = "INSERT INTO tech(name,father_name,email,password,technology,gender,language,query)
        VALUES('$name','$fathername','$email','$password','$tech','$gender','$lang1','$query')";

$result = mysqli_query($conn,$sql);

if(!$result){
    header("location:registration.php?error=Data not inserted.".mysqli_error($conn));
}else{
    header("location:registration.php?success=Data inserted successfully.");
}

?>