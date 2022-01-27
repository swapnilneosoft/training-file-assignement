<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    if (is_dir("assets/auth/$email")) {
        echo " <h1>User is already registtered !</h1>";
        if(file_exists("assets/auth/$email/details.txt"))
        {
            $fo = fopen("assets/auth/$email/details.txt","r");
            
            while(($line = fgets($fo)) != false)
            {
              print_r($line);
            }
        }else{
            echo "<h3>Somethng weent wrong !</h3>";
        }
    }else{
        mkdir("assets/auth/$email");

        $fo = fopen("assets/auth/$email/details.txt","w");
        fputs($fo,"$pass\n$name\n$age\n$gender");
        fclose($fo);
        echo "<h1> Registered Successfully !</h1>";

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
                        <label for="Email">Password</label>
                        <input type="text" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label for="Email">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="Email">Age</label>
                        <input type="text" class="form-control" name="age">
                    </div>
                    <div class="form-group">
                        <label for="Email">Gender</label>
                        <input type="radio" class="form-radio" name="gender" value="male">Male 
                        <input type="radio" class="form-radio" name="gender" value="male">female 
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