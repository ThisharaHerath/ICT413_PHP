<?php
class user{
private $ID;
private $Name;
private $Age;
private $City;

public function setdata ($i,$i,$n,$a,$c){
    $this->id=$i;
    $this->name=$n;
    $this->age=$a;
    $this->city=$c;
}
function getData(){
    return
    "ID:".$this->id."<br>
    Name:".$this->name."<br>
    Age:".$this->age."<br>
    City:".$this->city."<br><br>";
}
}
$u1=new user();
$u1->setData(1,"Kamal","25","Galle");
echo $u1->getData();

$u2=new user();
$u2->setData(1,"Sumali","22","Colombo");
echo $u2->getData();
?>

