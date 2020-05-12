<?php
require_once('.\classes\onlinepayment.php');
require_once('.\classes.\payment.php');
require_once('.\display.\display.php');
class ABA extends onlinepayment
{
    use payment;
}
            
class Wing extends onlinepayment
{
   use payment;
}
            
class PiPay extends onlinepayment
{
    use payment;
}            
$payment = [
    new ABA(5, 1),
    new Wing(3, 2),
    new ABA(4, 1),
    new ABA(5, 1),
    new PiPay(6, 1),
    new ABA(10, 1),
    new Wing(15, 3),
    new Wing(2, 1),
    new PiPay(20, 1),
    new ABA(10,6),
];

echo "A: Number of ABA's sales is ". ABA::$totalsale . "<br>";
echo "B: Number of PiPay's and Wing's sales is ". (PiPay::$totalsale + Wing::$totalsale)."<br>";

// display sale order by total amount
echo "C: ". "<br>";
$cloneItems = $payment;
    usort(
        $cloneItems, 
        fn($item1, $item2) => $item2->total <=> $item1->total
  );

display($cloneItems);
?>