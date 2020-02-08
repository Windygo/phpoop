<?php

//STATIC METHODS & PROPERTIES

//Static properties/methods are relevant to the CLASS not an instance, they are CLASS globals

class User {
  private $name;
  private $age;
  private $pass;
  public static $minPassLength = 6;

  public function __construct($name, $age, $pass){
    $this->name = $name;
    $this->age = $age;
    $this->pass = $pass;
  }

  // For static properties/methods use self:: instead of $this->
  public static function validatePass($pass){
    return (strlen($pass) >= self::$minPassLength) ? true : false;
  }

  //GETTERS
  function __get ($property){
    if (property_exists($this, $property)){
    return $this->$property;    
    }
    return;
  }


  //SETTERS
  function __set($property, $value){
    if (property_exists($property, $value)){
      $this->$property = $value;
    }
    return $this;
  }
 
}

// $user1 = new User ('Bob', 35, 'Ganga  ');

// echo $user1->__get('name');
// echo '<br>';
// echo $user1->__get('age');
// echo '<br>';
// echo $user1->__get('pass');
// echo '<br>';
// echo 'Min pass lenght is: '. User::$minPassLength;
// echo '<br>';
// $pass = $user1->__get('pass');
// echo 'Password ';
// echo (User::validatePAss($pass)) ? ' is':' is NOT';
// echo ' OK';

//We can use static fucntions witout instantiating an object
$pass = 'Karam';
echo (User::validatePass($pass)? 'Pass valid' : 'Pass NOT valid');   