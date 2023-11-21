<?php
class employee{
    public $name;
    public $age;
    public $salary;

function __construct($n,$a,$s){
    $this->name=$n;
    $this->age=$a;
    $this->salary=$s;
    }

    function info(){
        echo "<h3>Employee Profile</h3>";
        echo "Employee Name:".$this->name."<br>";
        echo "Employee Age:".$this->age."<br>";
        echo "Employee Salary:".$this->salary."<br>";
    }
}
class manager extends employee{
    function __construct($name,$age,$salary);



   class manager extends employee{
    public $allowance = 1500;
    public $ot=3000;
    public $totalSalary;

    fuction info(){

        $this->totalsalary=$this->salary + $this->allowence + $this->ot;

        echo "<h3>Manager Profile</h3>";
        echo "Manager Name:".$this->name. "<br>";
        echo "Manager Age:".$this->age."<br>";
        echo "Employee Salary:".$this->totalSalary."<br>";
    }
   } 

   $e1=new employee("Ram,25,1000");
   $e1=new manager("Ram,25,1000");
  
   $e1->info();
   $e2->info();
