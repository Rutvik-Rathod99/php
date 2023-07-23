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
   $to="rutvik.rathod111370@marwadiuniversity.ac.in";
   $from="rutvikrathod2324@gmail.com";
   $msg="hello world";
   $sub="php mail";
   $header="From:rutvikrathod2324@gmail.com0";
   if(mail($to,$sub,$msg,$header))
   {
    echo "mail sent";
   }
   else{
    echo "mail not sent";
   }
   
   ?>
   
</body>
</html>