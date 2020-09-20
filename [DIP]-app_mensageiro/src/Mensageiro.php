<?php

namespace src;
use src\Email;

class Mensageiro {

    public function enviarToken(): void {
        $obj = new Email();
        $obj->enviar();
    }

}

?>