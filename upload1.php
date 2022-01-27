<?php
    if(isset($_POST['upload']))
    {
        $tmp= $_FILES['profile']['tmp_name'];
        $fname = $_FILES['profile']['name'];
        $dest = "assets/upload/profile/$fname";
        if(!empty($tmp))
        {
            if(move_uploaded_file($tmp,$dest))
            {
                echo "uploaded succeessfully !";
            }else{
                echo "error while uploading the file !";
            }
        }else{
            echo "select the file ";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
        <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="profile" id=""><br>
        <button name="upload">Upload</button>
        </form>
</body>
</html>