<?php
require_once "person.php";

class Student extends Person{
    // public $name;
    // public $age;
    // function __construct($name,$age) {
    //     $this->name = $name;
    //     $this->age = $age;
    // 
    // function __destruct(){
    //     echo "El estudiante destruido es: {$this->name}.";   
    // }
    //Metodos
    // function set_name($name){
    //     $this->name = $name;
    // }
    // function get_name(){
    //     return $this->name;
    // }
    // function get_age(){
    //     return $this->age;
    // }

    public function saludo(){
        echo "pertenezco a la carrera de SISTEMAS";
    }
}

// $estudiante1 = new Student('Edito', 21);
// $estudiante1->set_name('Edito');
// echo $estudiante1->get_name();
// echo $estudiante1->get_age();
// echo $estudiante1->saludo();

$estudiante1 = new Student('Edito', 21);
$estudiante1->presentacion();
$estudiante1->saludo();