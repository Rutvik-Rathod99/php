<!DOCTYPE html>
<?php
   setcookie("name","rutvik",time()+3600);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php

//    echo $_COOKIE['name'];
//    echo $_COOKIE['_ga'];
//    print_r($_COOKIE);

setcookie("name","rutvik",time()-3600);//delteing cookie
   if(isset($_COOKIE["name"]))
   {
    echo "welcom ".$_COOKIE["name"];
   }
   else{
    echo "welcom guest";
   }
   
   ?>
   
</body>
</html>