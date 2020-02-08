<?php

// INTERFACES - Group together classes and give them a set of behaviors

interface PaymentInterface{
  public function payNow();
}

interface LoginInterface{
  public function loginFirst();
}

class PayPal implements PaymentInterface, LoginInterface {  // Implements two interfaces
  public function loginFirst() {}  //only PP requires login first
  public function payNow() {}
  public function paymentProcess() {
    $this->loginFirst();
    $this->payNow();
  }
}

class BankTransfer implements PaymentInterface, LoginInterface {  // Implements two interfaces
  public function loginFirst() {}  //only PP requires login first
  public function payNow() {}
  public function paymentProcess() {
    $this->loginFirst();
    $this->payNow();
  }
}

class Visa implements PaymentInterface {
  public function paymentProcess() {
    $this->payNow();
  }
}

class Cache implements PaymentInterface {
  public function paymentProcess() {
    $this->payNow();
  }
}

class BuyProduct {
  public function pay (PaymentInterface $paymentType){  // interface acts as mixed type declaration
    $paymentType->PaymentProcess();
  }
}

$paymentType = new PayPal();
$buyProduct = new BuyProduct();
$buyProduct->paymentProcess($paymentType);

?>

<p>See the <a href="https://www.php.net/manual/en/language.oop5.interfaces.php">documentation</a> & especially for the first note on them which explains bette why we use interfaces.</p>

