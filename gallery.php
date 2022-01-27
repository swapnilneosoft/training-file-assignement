<?php
    if(!is_dir("assets"))
    {
        mkdir("assets");
    }
    $scdir = scandir("assets");
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
            
            <?php 
            
                foreach($scdir as $sc)
                {
                    if($sc != '.'&& $sc != '..')
                    {
                        echo " 
                        <div class='col-2 m-1 border'>
                        <img src='assets/$sc' alt='' class='img-fluid' >
                        </div>
                        ";
                    }
                }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

 
  </body>
</html>