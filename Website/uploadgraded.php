<?php
$target_dir = "/var/www/html/DoneGrading/";
$target_dir_deletion = "/var/www/html/NeedsGrading/";
$filename = basename($_FILES["fileGraded"]["name"]);
$upload_target_file = $target_dir.$filename;
$deletion_target_file = $target_dir_deletion.$filename;
$uploadOk = 1;
$FileType = pathinfo($upload_target_file,PATHINFO_EXTENSION);

// Check if file already exists
if (file_exists($upload_target_file)) 
{
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileGraded"]["size"] > 500000) 
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
  if (move_uploaded_file($_FILES["fileGraded"]["tmp_name"], $upload_target_file) &&
	  unlink($deletion_target_file)) 
	{
    		echo "Thank for grading!!";
  	} 
   else 
	{
    		echo "Thank you for grading however, the paper was already graded.";
  	}
}
?>