<?php 
error_reporting(0);
//define variables 
$nameErr=$mobError="";
if(isset($_POST['sub'])){
     //name validation 
     $nam=input_field($_POST['name']);
     $mob=input_field($_POST['mobile']);
     if(empty($nam))
     {
         $nameErr="Name is required";
     }
     else {
         if(!preg_match("/^[a-zA-Z ]+$/",$nam)){
            $nameErr="Only alphabate allow";
         }
     }
     //mobile validation 
     if(empty($mob))
     {
         $mobError="Mobile is required";
     }
     else {
         if(!preg_match("/^[6-9][0-9]{9}+$/",$mob)){
            $mobError="Only 10 digit  allow";
         }
     }
     if($nameErr=="" && $mobError==""){
         echo "<h3> Registered Successfully</h3>";
     }
}
  function input_field($data){
      $data=trim($data);
      $data=stripslashes($data);
      $data=htmlspecialchars($data);
      return $data;
  }
?>
<!DOCTYPE html>
<html>
    <head>
         <style>
             .error{color:red}
         </style>
    </head>
    <body>
        <form method="post">
            <span class="error"> * are required fields </span><br/>
         Name : <input type="text" name="name"/> <span class="error">* <?php echo $nameErr;?></span><br/>
         Mobile : <input type="text" name="mobile"/><span class="error">*<?php echo $mobError;?> </span> <br/>
         <input type="submit" value="Add" name="sub"/>
        </form>
    </body>
</html>