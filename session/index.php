<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['views']))
{
    //unset($_SESSION['views']);
    //$_SESSION['views']+=1;
   
}
else{
    $_SESSION['views']=1;
}
//session_destroy();
echo 'views= '.$_SESSION['views'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>