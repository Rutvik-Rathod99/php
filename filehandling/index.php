<?php
//$file=fopen('demo.txt','r') or exit("unable to open file");
//read character by character
// while(!feof($file))
// {
// echo fgetc($file);
// }
//read one line
//echo fgets($file);

//write to file
//fwrite($file,"this is witern");
//echo filesize("demo.txt");
//fclose($file);


//csv file

// $file=fopen("demo.csv","w");

// //print_r(fgetcsv($file));
// $list="rutivk,rathod";
// fputcsv($file,explode(",",$list));
// fclose($file);

//COPY FUNCTION
// $file=fopen("demo.txt","r");
// if(copy("demo.txt","democopy.txt"))
// {
//     echo "success copy";
// }

//RENAME 

// if(rename("rename.txt","ranamed.txt"))
// {
//     echo "rename file is renamed as renamed";
// }

//UNLINK DELETE

if(unlink("delete.txt"))
echo "file deleted";
?>