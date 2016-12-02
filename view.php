<?php
function view(){
if (isset($visitor)){
if ($visitor=="visited")
include("https://cdn.rawgit.com/nurmancell/jwplayer/master/view.txt");
} else {
$file=fopen("view.txt","r+");
$result=fread($file,filesize("https://cdn.rawgit.com/nurmancell/jwplayer/master/view.txt"));
fclose($file);
$result += 1;
$file=fopen("https://cdn.rawgit.com/nurmancell/jwplayer/master/view.txt","w+");
fputs($file,$result);
fclose($file);
include("view.txt");
}
}
?>
