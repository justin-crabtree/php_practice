<?php 

class Car {
  var $wheels = 4;
  var $engine = 1;
  var $doors = 4;

  function amountWheels() {
    // "$this" refers to the class its inside of, in this case "Car"
    $this->wheels = 10;
  }
}

// assigns var to new instance of Car
$tesla = new Car();
$semi = new Car();

// calls on function which changes the var of wheels to == 10 for the instance of $semi
$semi->amountWheels();


echo $tesla->wheels . "<br>";
echo $semi->wheels;




// $merz = new Car();
// $honda = new Car();

// $bmw->moveWheels(); 
// $merz->moveWheels();
// $honda->moveWheels();


?>