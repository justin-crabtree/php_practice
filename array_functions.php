<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  
<?php 

$list = [1, 2, 3, 4, 5];
$list2= [5, 100, 1234345, 563456, 1234, 34];

echo max($list); // max value of array
echo "<br>";

echo min($list); // minimum value of array
echo "<br>";

sort($list2); // sorts values in array from smallest to largest
print_r($list2); // displays key/value pairs of array
echo "<br>";



?>






</body>
</html>