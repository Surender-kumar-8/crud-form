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
        <div class="m-5" width="50%" height="500px">
            <h2 class="text-dark">Student Registration</h2>

            <div class="form-control bg-warning m-3">
                <label for="fname">Name</label>
                <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter your name">
            </div>
            <div class="form-control bg-secondary text-white m-3">
                <label for="ffname">father name</label>
                <input type="text" class="form-control" name="ffname" id="ffname" placeholder="Enter your father">
            </div>
            <div class="form-control bg-warning m-3">
                <label for="email">email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" autocomplete="off">
            </div>
            <div class="form-control bg-secondary text-white m-3">
                <label for="pwd">password</label>
                <input type="password" class="form-control" name="email" id="email" placeholder="Enter your name" autocomplete="new-password">
            </div>
            <div class="form-control bg-warning m-3">
                <label for="tech">Technology</label>
                <select>
                    <option value="Select Language">Select Language</option>
                    <option value="1">Php</option>
                    <option value="2">Laravel</option>
                    <option value="3">Wordpress</option>
                </select>
            </div>
            <div class="form-control bg-secondary text-white m-3">
                Gender:-
                <div class="mx-5">
                    <label for="male">Male</label>
                    <input type="radio" class="form-check-input" name="gen" id="male" value="male">
                    <label for="female">Female</label>
                    <input type="radio" class="form-check-input" name="gen" id="female" value="female">
                </div>
            </div>
            <div class="form-control bg-warning m-3">
                How many language you spoke?
                <div class="mx-5">
                    <label for="lang1">English</label>
                    <input type="checkbox" class="form-check-input" name="lang1" id="lang1">
                    <label for="lang2">Hindi</label>
                    <input type="checkbox" class="form-check-input" name="lang2" id="lang2">
                    <label for="lang3">Punjabi</label>
                    <input type="checkbox" class="form-check-input" name="lang3" id="lang3">
                </div>
            </div>
            <div class="form-control bg-secondary text-white m-3">
               <p> Any query write here:-</p>
                <textarea name="des" id="des" rows="4" cols="50" ></textarea>
            </div>
       
            <div class=" m-3">
                <button class="col-4 btn btn-info">Submit</button>
            </div>
        </div>
    </form>
</body>

</html>