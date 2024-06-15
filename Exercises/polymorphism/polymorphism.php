<?php 
    //overrides the methods from parent class or super class
    class Animal {
        public function sound(){
            echo "Animal sound" . "<br>";
        }
    }

    class Dog extends Animal{
        public function sound(){
            echo "Bark bark bark!" . "<br>";
        }
    }

    class Cat extends Animal{
        public function sound(){
            echo "Meow meow meow" . "<br>";
        }
    }

    class Bird extends Animal{
        public function sound(){
            echo "Chirp chirp chirp" . "<br>";
        }
    }

    $animal = new Animal();
    $dog = new Dog();
    $cat = new Cat();
    $bird = new Bird();

    $animal->sound();
    $dog->sound();
    $cat->sound();
    $bird->sound();
?>