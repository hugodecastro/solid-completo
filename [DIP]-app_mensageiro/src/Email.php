<?php

namespace src;

class Email implements IMensagemToken {

    public function enviar(): void {
        echo 'E-mail: Seu token é '.random_int(100,900).'-'.random_int(100,900);
    }

}

?>