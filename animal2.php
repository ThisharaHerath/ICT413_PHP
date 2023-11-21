<?php
//interface define
interface Animal{
    public function {
        public function makeSound();
    }

    //class definitions
    class Cat implements Animal{
        public function makeSound(){
            echo "Meow";
        }
    }

    class Dog implements Animal{
        public function makeSound{
            echo "Bark";
        }
    }

    class Dog implements Animal{
        public function makeSound{
            echo "Squeak";
}
    }

    //Createa list animals
    $cat=new Cat();
    $dog=new Dog();
    $mouse=new Mouse();
    $animals=array($cat,$dog,$mouse)
    
    
