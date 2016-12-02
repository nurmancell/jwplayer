<?php
function view(){
if (isset($visitor)){
if ($visitor=="visited")
include("view.txt");
} else {
$file=fopen("view.txt","r+");
$result=fread($file,filesize("view.txt"));
fclose($file);
$result += 1;
$file=fopen("view.txt","w+");
fputs($file,$result);
fclose($file);
include("view.txt");
}
}
?>
