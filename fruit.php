<?php
class Fruit{
    public $name;
    protected $color;
    private $weight;
}

$mango = new Fruit();
echo $mango->name = 'Mango';
echo $mango->color = 'Yellow';
echo $mango->weight = '300';
?>