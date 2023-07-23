<?php
session_start();
$_SESSION['view']=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
  if(isset($_SESSION['view']))
  {
    $_SESSION['view']=$_SESSION['view']+1;

  }
  else{
    $_SESSION['view']=1;
  }
  echo "Views=". $_SESSION['view'];
  unset($_SESSION['view']);///delete only one data
   session_destroy();//delete whole seseeion

   ?>
   
</body>
</html>