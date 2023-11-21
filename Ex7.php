<?php
class Person{
    public $name;
    public $age;

    function show(){
        echo $this->name ." - ".$this->age."<br>";
    }
    function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
}
$p1=new Person("Harry",25);
// $p1->name="Harry";
// $p1->age=20;
$p1->show();