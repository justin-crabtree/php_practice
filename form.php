<?php 

if(isset($_POST['submit'])) {
  echo "It works";

}




?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  
<form action="form.php" method="post">
  <input type="text" placeholder="Enter Username">
  <input type="password" placeholder="Enter Password">
  <input type="submit" name="submit">

</form>


</body>
</html>