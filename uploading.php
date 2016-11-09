<?php
$name = $_POST['name'];
$file_name = $_FILES['upfile']['name'];
$extend = explode(".",$file_name);
$key = count($extend)-1;
$ext = ".".$extend[$key];                 //算出文件的扩展名
$newfile = $name.$ext;                   //根据时间戳重命名文件
$tmp_name = $_FILES['upfile']['tmp_name'];
// $tmp_name = $_FILES["upfile"]["tmp_name"]
move_uploaded_file($tmp_name,"../../download/".$newfile);
print_r($tmp_name);
// echo $file_name,$tmp_name;