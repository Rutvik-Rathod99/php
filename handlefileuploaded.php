<?php

$target="upload/";
$target_dir=$target.basename($_FILES['uploadfile']['name']);
//echo $target_dir;
//echo $_FILES['uploadfile']['tmp_name'];
// if(move_uploaded_file($_FILES['uploadfile']['tmp_name'],$targer_dir))//move from temp file to target file
// {
//     echo "the file ".basename($_FILES['uploadfile']['name']." has been added");
// }
// else{
//     echo "sorry file not uploaded";
// }
echo $_FILES['uploadfile']['size']."<br>";
$type= $_FILES['uploadfile']['type'];
$size= $_FILES['uploadfile']['size'];
if(strstr($type,"jpeg")=="jpeg")
{
    die ("jpeg files not allowed");//file is to large vala if nahi chalega kyuki die se execution stop ho jayega
}
if($size>600000)
{
    echo "file is to large";
}
?>