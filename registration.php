    <?php
    session_start();
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </head>
    <body>

        <form action="data.php" method="post">
            <?php if (isset($_GET['error'])) : ?>
                <div class="alert alert-danger">
                    <?php echo $_GET['error'] ?>
                </div>
            <?php endif; ?>

            <?php if (isset($_GET['success'])) : ?>
                <div class="alert alert-success">
                    <?php echo $_GET['success'] ?>
                </div>
            <?php endif; ?>

            <div class="m-5" width="50%" height="500px">
                <h2 class="text-dark">Student Registration</h2>

                <div class="form-control bg-warning m-3">
                    <label for="fname">Name</label>
                    <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter your name">
                </div>

                <span class="text-danger m-3">
                    <?php if (isset($_SESSION['error']['name_error'])) {
                        echo $_SESSION['error']['name_error'];
                    } ?>
                </span>

                <div class="form-control bg-secondary text-white m-3">
                    <label for="ffname">father name</label>
                    <input type="text" class="form-control" name="ffname" id="ffname" placeholder="Enter your father">
                </div>

                <span class="text-danger m-3">
                    <?php if (isset($_SESSION['error']['fname_error'])) {
                        echo $_SESSION['error']['fname_error'];
                    } ?>
                </span>
                
               <!-- dob --> 

               <div class="form-control bg-secondary text-white m-3">
                    <label for="ffname">father name</label>
                    <input type="date" class="form-control" name="dob" id="dob">
                </div>

                <span class="text-danger m-3">
                    <?php if (isset($_SESSION['error']['dob_error'])) {
                        echo $_SESSION['error']['dob_error'];
                    } ?>
                </span>

                <div class="form-control bg-warning m-3">
                    <label for="eml">email</label>
                    <input type="email" class="form-control" name="eml" id="eml" placeholder="Enter your email" autocomplete="off">
                </div>

                <span class="text-danger m-3">
                    <?php if (isset($_SESSION['error']['email_error'])) {
                        echo $_SESSION['error']['email_error'];
                    } ?>
                </span>

                <div class="form-control bg-secondary text-white m-3">
                    <label for="pwd">password</label>
                    <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter your password" autocomplete="new-password">
                </div>

                <span class="text-danger m-3">
                    <?php if (isset($_SESSION['error']['password_error'])) {
                        echo $_SESSION['error']['password_error'];
                    } ?>
                </span>

                <div class="form-control bg-warning m-3">
                    <label for="tech">Technology</label>
                    <select name="tech">
                        <option value="">Select Language</option>
                        <option value="php">Php</option>
                        <option value="laravel">Laravel</option>
                        <option value="wordpress">Wordpress</option>
                    </select>
                </div>

                <span class="text-danger m-3">
                    <?php if (isset($_SESSION['error']['tech_error'])) {
                        echo $_SESSION['error']['tech_error'];
                    } ?>
                </span>

                <div class="form-control bg-secondary text-white m-3">
                    Gender:-
                    <div class="mx-5">
                        <label for="male">Male</label>
                        <input type="radio" class="form-check-input" name="gen" id="male" value="male">
                        <label for="female">Female</label>
                        <input type="radio" class="form-check-input" name="gen" id="female" value="female">
                    </div>
                </div>

                <span class="text-danger m-3">
                    <?php if (isset($_SESSION['error']['gender_error'])) {
                        echo $_SESSION['error']['gender_error'];
                    } ?>
                </span>

                <div class="form-control bg-warning m-3">
                    How many language you spoke?
                    <div class="mx-5">
                        <label for="lang1">English</label>
                        <input type="checkbox" class="form-check-input" name="lang[]" value="English,">
                        <label for="lang2">Hindi</label>
                        <input type="checkbox" class="form-check-input" name="lang[]" value="Hindi,">
                        <label for="lang3">Punjabi</label>
                        <input type="checkbox" class="form-check-input" name="lang[]" value="punjabi">
                    </div>
                </div>

                <span class="text-danger m-3">
                    <?php if (isset($_SESSION['error']['lang1_error'])) {
                       echo $_SESSION['error']['lang1_error'] = "Select atleast one";                
                            } ?>
                </span>

                <div class="form-control bg-secondary text-white m-3">
                    <p> Any query write here:-</p>
                    <textarea name="des" id="des" rows="4" cols="50" placeholder="write here...."></textarea>
                </div>

                <div class=" m-3">
                    <button class="col-4 btn btn-info">Submit</button>
                </div>
            </div>
        </form>
    </body>

    </html>