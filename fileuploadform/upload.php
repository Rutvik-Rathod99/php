<?php
$filenae=$_FILES['myfile']['name'];
$filetype=$_FILES['myfile']['type'];
$filesize=$_FILES['myfile']['size'];
$target="upload/";
$target_dir=$target.basename($_FILES['myfile']['name']);
if(move_uploaded_file($_FILES['myfile']['tmp_name'],$target_dir))
{
    echo 'file name is '.$filenae.'<br>';
    echo "file type is ".$filetype."<br>";
    echo "file size is ".$filesize."<br>";
    echo "The File ".basename($_FILES['myfile']['name'])."has been uploaded";
}
else{
    echo "error uploading file";
}
?>