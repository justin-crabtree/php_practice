<?php 

class Car {
  var $wheels = 4;
  var $engine = 1;
  var $doors = 4;

  function amountWheels() {
    $this->wheels = 10;
  }
}
$tesla = new Car();

class Plane extends Car {

}

$b52 = new Plane();

echo $b52->wheels;




?>