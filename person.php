<?php

class Person {
    private $name;
    private $age;

    public function __construct($name,$age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function presentacion(){
        echo "Hola, soy {$this->name} y mi edad es {$this->age}";
    }

    // public function type(){
    //     return 'Person';
    // }
}

// ReflectionClass::export('Person');
?>