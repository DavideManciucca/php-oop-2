<?php
require_once __DIR__ . "/Utente.php";

class UtenteRegistrato extends Utente{
  public $discount = 20%;

  public function setDiscount($_discount){
    $this->discount=$_discount;
  }
  public function getDiscount(){
    return $this->discount;
  }
}