<?php

require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/CreditCard.php';


$myuser = new User('Franco', 'blu', 'ciaociao@ciao.com');

$myCreditCard = new CreditCard();
$myCreditCard->setExpirationMonth('09');
$myCreditCard->setExpirationYear('20');
$myCreditCard->setCvv('865');
$myCreditCard->setNumber('4242424242424242');
$myCreditCard->owner = "Franco Blu";

try {
    $myCreditCard->isExpired();
    $myuser->setCreditCard($myCreditCard);
} catch (Exception $e) {
    echo $e->getMessage();
}


var_dump($myuser);
