<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  
<?php 

$x = "outside"; // global variable

function convert(){
  global $x; // calls on global variable
  $x = "inside"; // local variable, $x is now equal to "inside"
}

echo $x; // displays the global variable("outside")
echo "<br>";

convert(); // calls on function to change the global("outside") into the local variable("inside")

echo $x; // displays the new variable("inside")
?>






</body>
</html>