<?php
class calculation{
    public $a;
    public $b;
    public $c;

    //method1
    public Function sum();
    {
        $this->c= $this-> a + $this ->b;
        return $this->c;
    }

    //method2
    public Function sub();
    {
        $this->c $this->a-$this->b;
        return $this->c;
    }
}

//creat objects
$c1=new calclation();
$c1->a=18;
$c2->b=20;

$c2=new calclation();
$c2->a=50;
$c2->b=35;

echo "Sum value if c1" .$c1->sum()."<br>";
echo "Sum value if c2" .$c2->sum()."\n";
