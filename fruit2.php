<?php
class Fruit{
    public $name;
    protected $color;
    public function_construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }
    public function intro(){
       echo "The fruit is{$this->name} and the color is {$this->color}. ";
    }
}

class Strawberry extends Fruit{
    public function message(){
        echo "Am I a Fruit or a berry";
    }
}
$Strawberry = new Strawberry("Strawberry", "red");
$Strawberry->message();
$Strawberry->intro();
?>