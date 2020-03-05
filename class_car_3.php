<?php 

class Car {
  function moveWheels() {
    echo "Wheels move";
  }
}

$bmw = new Car();
$merz = new Car();
$honda = new Car();

$bmw->moveWheels(); 
$merz->moveWheels();
$honda->moveWheels();


?>