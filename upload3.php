<?php

if (isset($_POST['upload'])) {
    for ($i = 0; $i < count($_FILES['att'])-1; $i++) {
        $tmp = $_FILES['att']['tmp_name'][$i];
        $fname = $_FILES['att']['name'][$i];
        $extn = pathinfo($fname, PATHINFO_EXTENSION);
        $name = "attatch-" . rand() . '-' . time() . ".$extn";

        if (!empty($tmp)) {
            $dest = "storage3/$name";
            if (move_uploaded_file($tmp, $dest)) {
                echo "uploaded succeessfully !";
            } else {
                echo "error while uploading the file !";
            }
        } else {
            echo "select the file ";
        }
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
        <input type="file" name="att[]" id="" multiple><br>
        <button name="upload">Upload</button>
    </form>
</body>

</html>