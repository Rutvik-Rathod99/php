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
   //include_once "form.php"//inludes file only once if it is already included it not reinclude
 //  require_once "form.php"
 //include "form2.php"; if form2 not found it will give warnng and script executes
 //require "form8.php";//in case of requre if file not found it gives fatal error
$name=$_POST['uname'];
$email=$_POST['email'];
$res=preg_match("/^[a-zA-Z]*$/",$name);
$flag=0;
// if(!$res)
// {
//     echo "enter name correctly";
// }
// else{
//     echo "name is ok";
// }
if(empty($name))
{
    echo "name cant be empty please enter some value";
    $flag=1;
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    $flag=1;
    echo("email is incoreect");
  
    
}
if($flag==1)
include "form.php";
?>
   
</body>
</html>