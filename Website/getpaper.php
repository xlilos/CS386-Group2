<?php
$filename = $_POST['fileName'];
$dir = '/var/www/html/DoneGrading';
$array = scandir($dir);
$flag = -1;

foreach($array as $value)
{
  if(strcmp($value, $filename) === 0)
  {
    header('Content-Type: application/force-download');
    header("Cache-Control: private",false);
    header('Content-Disposition: attachment; filename="'.basename($filename).'"');
    header('Content-Length: '.filesize($filename));
    header("Content-Transfer-Encoding: binary");
    readfile('DoneGrading/'.$filename);
    $flag = 1;
    break;
  }
}

if($flag === -1)
{
  echo "File not found. Please try another file name.";

  echo "\nRedirecting you back to the home page in 5 seconds";

  header('Refresh: 5; URL=http://47.215.199.104:8080/');
}

?>
