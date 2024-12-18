<?php 
include_once("selectData.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
</head>
<body>
    <table>
        <?php if(mysqli_num_rows($result) > 0){ ?>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>father name</th>
            <th>email</th>
            <th>password</th>
            <th>technology</th>
            <th>gender</th>
            <th>language</th>
            <th>query</th>
        </tr>
        <?php
       
        while ( $rowdata = mysqli_fetch_assoc($result) ) { ?>
        <tr>
            <td><?php echo $rowdata['id']?></td>
            <td><?php echo $rowdata['name']?></td>
            <td><?php echo $rowdata['father_name']?></td>
            <td><?php echo $rowdata['email']?></td>
            <td><?php echo $rowdata['password']?></td>
            <td><?php echo $rowdata['technology']?></td>
            <td><?php echo $rowdata['gender']?></td>
            <td><?php echo $rowdata['language']?></td>
            <td><?php echo $rowdata['query']?></td>
        </tr>
        <?php };?>
        <?php }; ?>
    </table>
</body>
</html>