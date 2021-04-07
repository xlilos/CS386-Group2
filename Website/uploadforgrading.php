<?php
$target_dir = "/var/www/html/NeedsGrading/";
$filename = basename($_FILES["fileToUploadGrading"]["name"]);
$date = date('ndHisy');
$target_file = $target_dir.$date.$filename;
$uploadOk = 1;
$FileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if file already exists
if (file_exists($target_file)) 
{
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUploadGrading"]["size"] > 500000) 
{
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($FileType != "txt") 
{
  echo "Sorry, only txt files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) 
{
  echo "Sorry, your file was not uploaded.";
} 
// if everything is ok, try to upload file
else 
{
  if (move_uploaded_file($_FILES["fileToUploadGrading"]["tmp_name"], $target_file)) 
	{
    		echo "The file ".$date.$filename." has been uploaded please rememeber file name.";
  	} 
   else 
	{
    		echo "Sorry, there was an error uploading your file.";
  	}
}
?>