<?php

// CLASS INHERITANCE

class User {

  protected $name;
  protected $age;

  public function __construct($name,$age){
    $this->name = $name;
    $this->age = $age;
  }

}

class Customer extends User {

  private $balance;

  public function __construct($name, $age, $balance){         
      parent::__construct($name,$age);
      $this->balance = $balance;
  }

  public function __get($property){
    if (property_exists($this, $property)) {
      return $this->$property;
    }   
  }

  public function __set($property,$value){
    if (property_exists($propety, $value)){
        $this->$property = $value;
    }  
    return $this; 
  }

  public function pay($amount){
    return ' paid $' . $amount;
  }
}

$customer1 = new Customer('John',33, 500);
echo $customer1->__get('name'). ' age '. $customer1->__get('age') . $customer1->pay(100). ' balance $'.$customer1->__get('balance');

