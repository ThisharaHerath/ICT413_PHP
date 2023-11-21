<?php
class Fruit{
    public $name;
    protected $color;
    private $weight;
}

function set_name($n) {
    return $this->name=$n;
}
protected function set_color($n){
    return $this->color=$n;
}
private function set_weight($n){
    return $this->weight=$n;
}
  
$mango = new Fruit();
echo $mango->set_name('Mango');
echo $mango->set_color('Yellow');
echo $mango->set_weight('300');
?>