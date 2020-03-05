<?php 

class Car {
  public $wheels = 4; // available to whole program
  protected $engine = 1; // available to only this class or subclass with inheritance
  private $doors = 4; // available to only this specific class, cannont be used with subclass or inheritance
  var $trunk = 1;

  function showProperty() {
    echo $this->doors;
  }
  
}


$tesla = new Car();
$semi = new Semi();

class Semi extends Car {
  // function showProperty() {
  //   echo $this->engine;
  // }
}

// echo $tesla->wheels;
// echo $tesla->engine;
echo $tesla->showProperty();
// echo $semi->showProperty();
// echo $semi->doors;



?>