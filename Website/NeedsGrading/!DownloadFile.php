<?php
$dir = '/var/www/html/NeedsGrading';
$array = scandir($dir);
$Size = sizeof($array) - 1;
$random_no = rand(3,$Size);

// Sort in ascending order - this is default
$file= $array[$random_no]; //file location
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.basename($file).'"');
header('Content-Length: ' . filesize($file));
readfile($file);

?>
