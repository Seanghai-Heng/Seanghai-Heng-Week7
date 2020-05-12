<?php
class OnlinePayment
{
  public $price, $quantity, $total;

  function __construct($price, $quantity)
  {
    $this->price = $price;
    $this->quantity = $quantity;
    $this->total = $price * $quantity;
  }
}

?>