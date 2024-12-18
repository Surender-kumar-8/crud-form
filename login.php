<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    <?php if(isset($_GET['error'])) {?>
        <div class="alert alert-danger mx-auto">
            <strong class="alert alert-danger">Error : </strong><?php echo $_GET['error']; ?>
        </div>
    <?php } ; ?>
    <div style="height:300px; width: 50%;" class="bg-secondary mx-auto rounded mt-5">
    
        <form action="login_check.php" method="post">
            <div class=" m-4 mt-5 p-5 col-10">
            <h2 class="text-white">Login page</h2>
                <input type="email" class="m-2 form-control mx-auto" name="eml" id="eml" placeholder="Enter your name" autocomplete="off">
                <input type="password" class=" form-control" name="pwd" id="pwd" placeholder="Enter your password" autocomplete="new-password">
                <button type="submit" class=" mt-4 btn btn-info">Login</button>
            </div>
        </form>    
    </div>
</body>
</html>