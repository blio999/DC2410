<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet">

    <title>Sign Up - Aston Events</title>
</head>

<body>



    <div class="container h-100 mt-4">
    <?php include("navbar.php")?>

        <br>

        <form class="row justify-content-center" method="POST" action="sign-up-reciever.php">
            <div class="mb-3 col-8">
                <label for="InputName" class="form-label">First Name(s)</label>
                <input type="text" class="form-control" name="InputName" id="InputName">
            </div>
            <div class="mb-3 col-8">
                <label for="InputSurname" class="form-label">Surname</label>
                <input type="text" class="form-control" name="InputSurname" id="InputSurname">
            </div>
            <div class="mb-3 col-8">
                <label for="InputEmail" class="form-label">Email address</label>
                <input type="email" class="form-control" name="InputEmail" id="InputEmail">
            </div>
            <div class="mb-3 col-8">
                <label for="InputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" name="InputPassword" id="InputPassword">
            </div>
            <div class="mb-3 col-8">
                <label for="InputContactNumber" class="form-label">Contact Number</label>
                <input type="text" class="form-control" name="InputContactNumber" id="InputContactNumber">
            </div>
            <div class="w-100"></div>
            <button type="submit" class="btn btn-primary col-4">Sign Up</button>
        </form>
    </div>















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>


</html>