<?php
class Person2{
    public $fname;
    public $lname;

    //constructor method
    function __ construct($fname,$lname){
        $this->$fname=$fname;
        $this->$lname=$lname;
    }

    function showName(){
        echo "My name is". $this->fname.' '.$this->lname;
    }
}

$obj= new Person2("Harry Potter");
$obj->showName();