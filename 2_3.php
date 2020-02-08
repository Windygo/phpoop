<?php

//CLASSES, PROPERITES $ METHODS

class User {
  //Properties (attributes)
  public $name;

  //Methods (functions)
  public function sayHello(){
    return $this->name . ' says Hello';
  }
}

// Instantiate a user object from the user class

$user1 = new User();
$user1->name = 'Zvi';  //a public property can be set directly - not recommended
echo $user1->name;
echo "<br>";
echo $user1->sayHello();
echo "<br>";

$user2 = new User();
$user2->name = 'Hadas'; //a public property can be set directly - not recommended
echo $user2->name;
echo "<br>";
echo $user2->sayHello();
echo "<br>";