<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- <h1>Hello php by html</h1> -->


    <?php


//-----------scope of var in PHP--------------
//     $a=56; //global scope

//     echo "a outside function is global scoped variable value is".$a;

//   function disp()
//   {
//     $a=564;
//     global $y;
//     $y=5126;
//     echo "a inside function is local scoped variable value is ".$a;
    
//   }
//   disp();

//   echo "y is global by using global keyword".$y;






//-------PHP COMMENTS-------  
//1.// 2.# 3./* */

//----------PHP VARIABLES----------
//$name="rutvik";

//---------we can write any valid html code in echo-------
//echo "<i>this is bold using echo</i>";


//---------Static variable----------
// function demo()
// {
//     static $a=0;
//     echo $a;
//     $a++;

// }
// demo();
// echo "<br>";
// demo();
// echo "<br>";
// demo();
// echo "<br>";


//----PHP ECHO AND PRINT 
//ehco no return value while print returns 1
//echo can take multiple parameters print take only one
//echo is faster than print

//ECHO DEMO
// $x=56;
// $y=78;
// echo "<h2>PHP IS FUN</h2>";
// echo("hello duniya");
// echo "hello","wordl";
// $name="rutvik";
// echo"<h2>hello $name how are y</h2>";
// echo "hello"."world";
// echo $x+$y;

//PRINT DEMO
// $txt1="Learn PHP";
// $txt2="W3Schools";
// $x=5;
// $y=4;

// print"<h2>".$txt1."</h2>";
// print "Study php at ".$txt2."<br>";
// print $x+$y;
// print "<h2>php is fun</h2>";

//------------DATE AND TIME IN PHP

//date(formate,timestamp)

// echo "Today is ".date("y/m/d");
// echo "Today is ".date("y.m.d");
// echo "Today is ".date("y-m-d");
// echo "today is ".date("l");//give day like monday

//-----------TIME IN PHP------------
//echo "time is ".date("h:i:sA");  //H->24 HOUR FORMATE h->12 hour formate i->minuts s->secs a->am and pm(ante meridiem andpost meridiem)
//small a->am big A than AM

//-------------get the timezone-------------
//date_default_timezone_set("America/New_York");
//echo "The time is ".date("h:i:sa");
//echo date_default_timezone_get();


//-----------PHP ARRAYS-----------

//types of array in php
//1.indexed array
//2.asscociative array
//3.Multidimentainal array

//length of array->count() method

 //$evennums=array(2,4,6,8);
// echo $evennums[0];
// echo "length of array is ".count($evennums);


//loop throgh array

// for($i=0;$i<count($evennums);$i++)
// {
//     echo $evennums[$i]."<br>";
// }




//----------Associative arrays---------

// $age=array("rutvik"=>17,"mira"=>17,"ayushi"=>23);

// //or

// $age['kalu']=45;
// // echo "mira is ".$age['mira']."years old";
// // echo "kalu is ".$age['kalu']."years old";


// //loop throgh it

// foreach($age as $key=>$value)
// {
//     echo "Key=".$key."  value=".$value."<br>";
// }


//-------------MULTIDIMENSIONAL ARRAY IN PHP---------------

// $nums=array(
// array(1,2,3),
// array(4,5,6),
// array(7,8,9)

// );
// echo($nums[0][0]);

//------PHP ARRAY FUNCTIONS--------------
//$nums=array(1,2,3);
//echo array_push($nums,4,5,6);//push returns last value that is added in this case val is 6

// for($i=0;$i<count($nums);$i++)
// {
//     echo $nums[$i]."<br>";
// }
// echo array_pop($nums);
// for($i=0;$i<count($nums);$i++)
// {
//     echo $nums[$i]."<br>";
// }
// echo "removed from first is" .array_shift($nums)."<br>";
// for($i=0;$i<count($nums);$i++)
// {
//     echo $nums[$i]."<br>";
// }
// echo "after  unshift";
// echo array_unshift($nums,1,1,1,18);
// for($i=0;$i<count($nums);$i++)
// {
//     echo $nums[$i]."<br>";
// }

//-------parameterized functuion----------
// function add($a,$b)
// {
//     echo "sum is ".$a+$b;

// }
// add(45,45);



//----String manipulaiton-----------

//echo strpos("Hello world","Hello");
//echo str_replace("rutvik","rathod","i am rutvik");
// echo ucwords("hello i am rutvik rathod");
// echo strtoupper("abc");
// echo strtolower("ABC");
// echo str_repeat("#",10);
// echo strcmp("ame","bme");
// echo substr("hello javatpoint",0,5);
//echo trim("       sdfs        ");
//$str="<h1>sdfsd</h1>";
//echo htmlentities($str);//ignore html tag or simply print all as string
//echo nl2br("asdasdasd\nsdfdsfsdf\ndsfsdfsdfdsf"); //add new line before \n

// echo substr("hello my name",3);//output :lo my name
// echo substr("hello my name",-3);//op :ame
//echo substr("hello my name is rutik",0,5);
// echo substr("hello my name is rutik",0,-5);

// echo strstr("rutvik","vi",true);//outpuy:rut
// echo strstr("rutvik","vi",false);//op:vik

//echo stristr()//same as strstr but case insensitive

//echo strpos("hello duniya ky kiya","iya",10);
//echo stripos("hello duniya ky kiya","IYI",10);//case insensitive

//-------expoloed-----like split
// $str="hello my name is java";
// print_r(explode(" ",$str));

// $arr=array('hello','world','how');
// echo join(" ",$arr);

// $arr=array('hello','world','how');
// echo implode(" ",$arr);


//echo strcasecmp("rutvik","RutviK");//op:0

//echo ltrim("    aaa");//remove left spaes
//echo rtrim("aaaa     ");remove right spaces


// $a=5;
// if($a==3)
// {
//     echo "ok";
// }
// elseif($a==5)//or else if
// {
//     echo "also ok";
// }

//----------switch in php same as java and c an cpp---------


//-----PHP LOOPS ---------------------
//1.while
//2.do while
//3.for
//4 for each


//FOR EACH

//only on array it works
// $nums=array(1,2,3,4,5,6,87);


// foreach($nums as $num)
// echo $num."<br>";


//GOTO IN PHP
// for($i=0;$i<5;$i++)
// {
//     if($i==2)
//     {
//         goto end;
//     }
//     echo $i." ";
// }
// end:
// echo "this is end";


//-----------------------OPERATORS-------------------
/*
1.arithmatic op
2.assignment op
3.comparison op
4.incr /decr op
5.logical ops
6.string ops
7.array ops
8.conditional assignment ops

*/
 //echo 2**4;
//-------------comparison ops------>
//  $a="100";
//  $b=100;
//  var_dump($a==$b);
//  var_dump($a===$b);
//  var_dump($a<>$b);//!= same
//  var_dump($a!=$b);
// echo $a<=>$b;

//-----------logical ops------
// var_dump(8 and 0);
// var_dump(8 or 0);
// var_dump(8 xor 0);


//-----------concat assign----------

// $s1="helo";
// $s2="world";

// $s1.=$s2;
// echo $s1;


//------------ARRAY OPERATORS--------------


// $arr1=[1,2,3];
// $arr2=[1,2,3,7,8,9];
// var_dump($arr1==$arr2);
// print_r($arr1 + $arr2);//union of a1 and a2 duplicates not be counted
//=== return true if arr1 and arr2 has same value and same key in same order and same type

// var_dump($arr1<>$arr2);



//---------TERNARY OPERATOR IN PHP


// $a=2;
// $b=5;
// $min=$a<$b?$a:$b;
// echo $min;

//---------Null coaleshing---------
//echo $color??"red";//if color varible not exist its value is set to red
//$user=$_POST['user']??"anonymous";



//----------PHP GLOBAL VARS SUPERGLOBALS
/*
1.$globals
2.$_SERVER ->info about header ,path and script location
3.$_REQUEST ->use to collect data afeter submiting the form
4.$_POST use to collect form data when methos is post
5.$_GET can alos use to get daata send in url
6.$_FILES
7.$_ENV
8.$_COOKIE
9.$SESSION
*/ 
echo $GLOBALS;
?>
</body>
</html>
