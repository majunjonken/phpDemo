<?php
var_dump($_FILES["file"]);
die();
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else
  {
  echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  echo "Type: " . $_FILES["file"]["type"] . "<br />";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  echo "Stored in: " . $_FILES["file"]["tmp_name"] . "<br />";
  if (!is_dir('upload/')) mkdir('upload/');
  if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
		$time=time();
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $time . '_' . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $time . '_' . $_FILES["file"]["name"];
      }
  }
?>