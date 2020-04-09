<?php
$myfile = fopen("storedxss.txt", "r");
echo fread($myfile,filesize("storedxss.txt"));
fclose($myfile);
?>