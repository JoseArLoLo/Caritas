<?php
require_once('clases/Payment.php');
extract($_REQUEST);

$Payment = new Payment($conektaTokenId, $card, $name, $description, $total, $email);

if($Payment->pay()){
    echo '1';
}else{
    echo $Payment->error;
}

?>