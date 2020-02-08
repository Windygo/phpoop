<?php

// THE CONSTRUCTOR & DESTRUCTOR

class User {

  //Properties
  public $name;
  public $age;

  //Constructor - Runs when an object is instantiated
  public function __construct($name, $age){
    echo 'Class '. __CLASS__ . ' instantiated <br>'; //__CLASS__ outputs name of current class
    $this->name = $name;
    $this->age = $age;
  }

  //Destructor - Runs when there are no longer any references to any object of this class
  // Used for clean up, closing connections etc.
  public function __destruct(){
    echo 'Destructor ran....<br>';
  }

  //Methods
  public function sayHello(){
    return $this->name.' is '. $this->age .' years old and Says Hello'.'<br><br>';
  }

}

$user1 = new User('Bob', 29);
echo $user1->sayHello();

$user2 = new User('Sara', 25);
echo $user2->sayHello();

$user3 = new User('Pete', 35);
echo $user3->sayHello();
