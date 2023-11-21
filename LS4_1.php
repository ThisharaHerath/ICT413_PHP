<?php
class Employee{
    abstract protected function prefixName($name);
}
class ChildClass extends ParentClass {
    public function prefixName($salary, $separator=".",$position){
        if ($salary==50000){
            $prefix="Rs.";
        }else{
            $position="Designer";
        }
        return"{$prefix} {$salary}";
    }
}