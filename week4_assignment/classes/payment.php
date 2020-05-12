<?php
trait payment {
    public static $totalsale = 0;
    public static $totalprice = 0;
  
    function __construct($price, $quantity)
    {
      parent::__construct($price, $quantity);
  
      self::$totalsale += $this->quantity;
      self::$totalprice += $this->total;
    }
}

?>