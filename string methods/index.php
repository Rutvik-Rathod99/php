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
    //$mydate=date("d/m/yy l");//06/05/2323 Saturday
   // $mytime=date("h:i:s a");
   // $mytime=date("H:i:s a");//24 hour formate
    //echo $mytime
   // date_default_timezone_set("America/New_York");
   // echo date_default_timezone_get();

   //arrays

   /*$color=array("red","green","blue","yello");
   print_r($color) ;
   for($i=0;$i<count($color);$i++)
   {
 echo $color[$i]."<br>";
   }*/

//    $ages=array("rutvik"=>"23","sahil"=>"34","jayesh"=>"45");

//    //echo $ages["rutvik"];
//    foreach ($ages as $key => $value) {
//     echo $key.":".$value.'<br>';
//    }

// $mularr=array(
//     array(1,2,3,1),
//     array(4,5,6),
//     array(7,8,9,8),
//     array(4,5,6,7,8,9)
// );
// //print_r($mularr[0][0]);

// for($i=0;$i<count($mularr);$i++)
// {
//     for($j=0;$j<count($mularr[$i]);$j++)
//     {
//         echo $mularr[$i][$j]." ";
//     }
//     echo "<br>";
// }
 //$color=array("red","green","blue","yello");
//  array_push($color,"pink");
// print_r($color);
// array_pop($color);
// print_r($color);
// array_shift($color);
// print_r($color);
// array_unshift($color,"gtf");
// print_r($color);
$str="hello world";
// echo strlen(($str));
// echo str_word_count($str);
// echo strrev($str);
// echo $str;
//echo strpos($str,"wor");
// $nstr=str_replace("hello","wello",$str);
// echo $nstr;
// echo $str;
// echo ucwords($str);
// echo strtoupper($str);
// echo strtolower($str);
// echo str_repeat("=>",10);
// echo strcmp("rut","rutb");
// echo substr($str,0,5);
// echo trim("    uri   ");
// $htmlstr='<a href="exampl.com" target="_self">click</a>';
// echo htmlentities($htmlstr);
// $str = '<a
// href="https://www.w3schools.com">Go to
// w3schools.com</a>';
// echo htmlentities($str);

//$str="my name is rutvik\ni am from junagadh";
//echo nl2br($str);
// $str="my name is rutvik i am from junagadh";
// print_r(explode(" ",$str));
 //$arr=array("hello","i","am","rutvik");
// echo implode("-",$arr);

// echo strcasecmp("Rutvik","rutvik");

// echo ltrim("    rutvik   ");
// echo rtrim(" he      ");
// foreach($arr as $elem)
// echo $elem;

//include demo

// echo "hello";
// include "includefile.php";


//require

//require "require.php";
// require_once "require.php";
// require_once "require.php";
// require_once "require.php";
// include_once "require.php";//only one time include display one echo
   
//passwords enct

// echo crypt("rutivk","re");
// CRYPT_MD5
// CRYPT_EXT_DES
// CRYPT_BLOWFISH
// if(CRYPT_STD_DES==1)
// {
//     echo crypt("rathod","ttyy");
// }
// else{
//     echo "Standad des not supprots";
// }

//random salt

$data="demo";
$val1=rand(5,10);
$val2=rand(2,22);

echo md5($data)."<br>";
echo md5($val1.$data.$val2);
   ?>
</body>
</html>