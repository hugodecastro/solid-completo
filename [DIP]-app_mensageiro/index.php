<?php

require __DIR__.'/vendor/autoload.php';

use src\Mensageiro;

//-----canal e-mail----//
$msg = new Mensageiro();
$msg->setCanal('email');
$msg->enviarToken();

echo '<br/ >';

//-----canal sms------//
$msg2 = new Mensageiro();
$msg2->setCanal('sms');
$msg2->enviarToken();

?>