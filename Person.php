<?php

class Person
{
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;
  private $grandmother1;
  private $grandmother2;
  private $grandfather1;
  private $grandfather2;


  function __construct($name, $lastname, $age, $mother=null, $father=null, $grandmother1=null, $grandmother2=null, $grandfather1=null, $grandfather2=null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    $this->grandmother1 = $grandmother1;
    $this->grandmother2 = $grandmother2;
    $this->grandfather1 = $grandfather1;
    $this->grandfather2 = $grandfather2;
    $this->hp = 100;
  }

  function sayHi($name)
  {
    return "Hi $name, I`m " . $this->name;
  }

  function setHp($hp)
  {
    if ($this->hp + $hp >= 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function getHp()
  {
    return $this->hp;
  }
  function getName() {
    return $this->name;
  }
  function getMother() {
    return $this->mother;
  }
  function getFather() {
    return $this->father;
  }
  function getGrandmother1() {
    return $this->grandmother1;
  }
  function getGrandmother2() {
    return $this->grandmother2;
  }
  function getGrandfather1() {
    return $this->grandfather1;
  }
  function getGrandfather2() {
    return $this->grandfather2;
  }



  function getInfo(){
    return "
    <h2>A few words about me.</h2><br>" . "My name is: " . $this->getName() . "<br>my father is: " . $this->getFather()->getName() .  "<br>my mother is: " . $this->getMother()->getName() . "<br>my grandfather from my father side is: " . $this->getGrandfather2()->getName() . "<br>my grandfather from my mother side is: " . $this->getGrandfather1()->getName() . "<br>my grandmother from my father side is: " . $this->getGrandmother2()->getName() . "<br>my grandmother from my mother side is: " . $this->getGrandmother1()->getName(); 
  }
  }
    

$dmitriy = new Person("Dmitriy", "Ivanov", 81, null, null, null, null, null, null );
$ivantr = new Person("Ivantr", "Laskov", 80, null, null, null, null, null, null );
$marfa = new Person("Marfa", "Ivanova", 79, null, null, null, null, null, null );
$matriya = new Person("Matria", "Laskova", 78, null, null, null, null, null, null );

$ivan = new Person("Ivan", "Ivanov", 42, $marfa, $dmitriy, null, null, null, null);
$alexandra = new Person("Alexandra", "Ivanova", 40, $matriya, $ivantr, null, null, null, null);

$boris = new Person("Boris", "Ivanov", 15, $alexandra, $ivan, $matriya, $marfa, $ivantr, $dmitriy );

echo $boris->getInfo();


