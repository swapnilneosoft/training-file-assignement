<?php
setlocale(LC_ALL, 'en_US.UTF-8');
if (isset($_POST['upload'])) {
    $tmp = $_FILES['att']['tmp_name'];
    $fname = $_FILES['att']['name'];
    $extn = pathinfo($fname, PATHINFO_EXTENSION);
    $name = "attatch-".rand().'-'.time().".$extn";
    echo $extn;

    if (!empty($tmp)) {
        $dest = "storage/$name";
        if (move_uploaded_file($tmp, $dest)) {
            echo "uploaded succeessfully !";
        } else {
            echo "error while uploading the file !";
        }
    } else {
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
        <input type="file" name="att" id=""><br>
        <button name="upload">Upload</button>
    </form>
</body>

</html>