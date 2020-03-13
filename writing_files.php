<?php 

$file = "example.txt";

if($handle = fopen($file, 'w')) {
  fwrite($handle, 'There was a hole here. Its gone now.');
  fclose($handle);
} else {
  echo "The file couldnt be written";
}





?>