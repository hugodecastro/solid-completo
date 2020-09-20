<?php

namespace src;
use src\Email;

class Mensageiro {

    private $canal;

    public function getCanal(): string {
        return $this->canal;
    }

    public function setCanal(string $canal): void {
        $this->canal = $canal;
    }

    public function enviarToken(): void {
        
        $classe = '\src\\' . ucfirst($this->getCanal());

        $obj = new $classe;

        $obj->enviar();

    }

}

?>