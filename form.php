<?php 

if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $min = 5;
  $max = 10;
  $names = ["Justin", "Alexis", "Mr. Fish"];

  // echo "Hello " . $username;
  // echo "Your password is " . $password;

  if (strlen($username) < $min) {
    echo "Username has to be at least 5 characters";
  }
  if (strlen($username) > $max) {
    echo "Username can't be more than 10 characters";
  }

  if (!in_array($username, $names)) {
    echo "You're not a user";
  } else {
    echo "You may enter";
  }



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