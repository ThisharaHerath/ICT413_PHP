<?php
class person1{
    public $name;
    function __construct($n){
        $this->name=$n;
    }

    function show(){
        echo "Your name:" .$this->name;
    }}