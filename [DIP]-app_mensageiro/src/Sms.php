<?php

namespace src;

class Sms implements IMensagemToken {

    public function enviar(): void {
        echo 'SMS: Seu token é '.random_int(100,900).'-'.random_int(100,900);
    }

}

?>