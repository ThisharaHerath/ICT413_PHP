<?php
//Parent class
abstract class Car{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    abstract publicfunction intro();
    string;
}

//Child classes
class Audi extends Car {
    public function intro() : string{
        return "Choose German quality! I'm
        an $this->name!";
    }
}

classs Volvo extends Car{
    public function intro(): string{
        return "Proud to be Swedish! I'm a
        $this->name!";
    }
}

//Create objects from the child classes
$audi=new audi("Audi");
echo $audi->intro();
echo"<br>";

$volvo=new volvo("Volvo");
echo $volvo->intro();
echo"<br>";
?>