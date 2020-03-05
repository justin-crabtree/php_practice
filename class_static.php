<?php 

class Car {
  static $wheels = 4; // static variable is attached to class, not the instance
  var $engine = 1;

  function moveWheels() { // static method is attached to class
    Car::$wheels = 10;
  }
}


$tesla = new Car();
// $tesla->wheels; (cannot call var wheels because it doesnt belong to instance)

// echo $tesla->moveWheels();
// echo $tesla->wheels;

Car::moveWheels(); // use class name and "::" with the method
echo Car::$wheels; // use class name and "::" with name name of the var



?>