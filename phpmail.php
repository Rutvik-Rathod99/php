<?php


$to="rutvik.rathod111370@marwadiuniversity.ac.in";
$subject="php mail check";
$body="this is body";
$headers="From:rutvikrathod2324@gmail.com";
mail($to,$subject,$body,$headers);
echo "mail send";


?>