<?php 
session_start();

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
    echo "<h2>You can access this page</h2>";
    echo "<button type=button ><a href='logout.php'>LOGOUT</a></button>";
}else{
    echo "<h2>Access Denied</h2>";
}

?>

