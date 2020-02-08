<?php

// ACCESS MODIFIERS, GETTERS & SETTERS

class User {

  private $name;
  private $age;
  

  //Constructor
  public function __construct($name,$age){
    $this->name = $name;
    $this->age = $age;
  }

  
  //Getters
  public function getName(){
    return $this->name.'<br>';
  }
  public function getAge(){
    return $this->age.'<br>';
  }

  //Setters
  public function setName($name){
    $this->name = $name;
  }
  public function setAge($age){
    $this->age = $age;
  }

  //__get MAGIC METHOD
  // Provide the name of the property and get back its value
  public function __get($property){
    if (property_exists($this, $property)) { //check if property exists first
      return $this->$property.'<br>';
    }
  } 

  //__set MAGIC METHOD
  // Provide the name and value of the property and set the name to value
  public function __set($property, $value){
    if (property_exists($this, $property)) { //check if property exists first
      $this->$property = $value;
    }
    return this;
  }

}

$user1 = new User('Jane',39); // override with next two set statements
$user1->setName('Bob');
$user1->setAge('55');

echo $user1->getName();
echo $user1->getAge();

$user2 = new User('Josh',50); // override with next two MAGIC set statements
$user2->__set('name','Mariuma');
$user2->__set('age', 19);

echo '<br>';
echo $user2->__get('name');
echo $user2->__get('age');