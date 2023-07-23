<!DOCTYPE html>
<?php
setcookie("uname","rutvik rathod",time()+3600);
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
    if(isset($_COOKIE['uname']))
    {
    print_r($_COOKIE['uname']);
    setcookie('uname',"",time()-3600);
    }
    //print_r(isset($_COOKIE['uname']));
    //print_r($_COOKIE['uname']);
    ?>
</body>
</html>