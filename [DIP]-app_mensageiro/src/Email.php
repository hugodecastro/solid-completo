<?php

namespace src;

class Email {

    public function enviar(): void {
        echo 'E-mail: Seu token é '.random_int(100,900).'-'.random_int(100,900);
    }

}

?>