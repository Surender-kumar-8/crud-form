<?php 
require "connection.php";

$sql = "SELECT * FROM tech";
$result = mysqli_query($conn,$sql);
?>