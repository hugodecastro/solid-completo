<?php

namespace src;

class Whatsapp implements IMensagemToken {

    public function enviar(): void {
        echo 'Whatsapp: Seu token é '.random_int(100,900).'-'.random_int(100,900);
    }

}

?>