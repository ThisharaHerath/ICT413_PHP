<?php
class person{
    public $name;
   public $age;

    public function __constrat($name,$age);
    $this->$name=$name;
    $this->$age=$age;
}

public function displayDetails(){
    echo "Name: $this->name, Age: $this->age";
}

class Employee extends person{
    public $salary;
    public $position;

    public function __constract($name,$age,$salary,$position){
        parent::__constrat($name,$age);
        $this->$salary=$salary;
        $this->$position=$position;
    }
    public function displayEmployeeDetails(){
        parent::displayDetails();
        echo ", salary: $this->salary, position: $this->positon";

    }
}

$employee new Employee();
$employee displayDetails();
?>