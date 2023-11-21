<?php
class Vehicle {
    public function honk(){
        return "Honk honk!";
    }
}

class Car extends Vehicle {
    // this is class inherits the honk() method from the Vehicle class
}

$myCar=new Car();
echo $myCar->honk();