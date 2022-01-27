<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    if (is_dir("assets/$email")) {
        echo " <h1>User is already registtered !</h1>";
    }else{
        mkdir("assets/$email");
        mkdir("assets/$email/$pass");
        echo " <h1>User is  registtered !</h1>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Assignement 1 : Home</title>
</head>

<body>

    <h1>Gallery</h1>

    <div class="container m-5">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="" method="POST">


                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="Email">Pssword</label>
                        <input type="text" class="form-control" name="password">
                    </div>
                    <button name="submit" class="btn btn-success form-control mt-4">
                        Register
                    </button>
                </form>
            </div>
            <div class="col-md-4"></div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


</body>

</html>