<?php 

if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  echo "Hello " . $username;
  echo "Your password is " . $password;

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
  <input type="text" name="username" placeholder="Enter Username">
  <input type="password" name="password" placeholder="Enter Password">
  <input type="submit" name="submit">

</form>


</body>
</html>