<?php 

$file = "example.txt";

if($handle = fopen($file, 'r')) {
  // echo $content = fread($handle, 10); // 10 is bytes, each byte is a character and it will only read the first 10 characters
  echo $content = fread($handle, filesize($file)); // filesize reads the entire file
  fclose($handle);
} else {
  echo "The file couldnt be written";
}





?>