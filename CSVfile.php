<?php 


//$file=fopen("dummycsv.csv","r");
// print_r(fgetcsv($file));
// fclose($file);

$list="rutvik,rathod,12";
$file=fopen("dummycsv.csv","w");
fputcsv($file,explode(",",$list));
fclose($file);

?>