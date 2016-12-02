<?php
<?
define("HITCOUNT", "hitcounter.txt");
function addOne() {
$fh = fopen(HITCOUNT, "r");
$count = fread($fh, filesize(HITCOUNT));
fclose($fh);

$count = $count +1;

$fh = fopen(HITCOUNT, "w");
fwrite($fh, $count);
fclose($fh);
}

function getcount() {
$fh = fopen(HITCOUNT, "r");
$count = fread($fh, filesize(HITCOUNT));
fclose($fh);

return $count;
}
addOne();
echo "View ";
echo getCount(); 
?>
?>
