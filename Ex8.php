<?php
class Person{
    public $name;
    public $indexNumber;
    public $age;

    function show(){
        echo $this->name ." - ".$this->indexNumber ." - ".$this->age."<br>";
    }
    function __construct($name,$indexNumber,$age){
        $this->name=$name;
        $this->indexNumber=$indexNumber;
        $this->age=$age;
    }
}
$p1=new Person("Harry",5429,25);
// $p1->name="Harry";
// $p1->age=20;
$p1->show();