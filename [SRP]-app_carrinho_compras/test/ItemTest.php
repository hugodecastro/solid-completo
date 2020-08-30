<?php

use PHPUnit\Framework\TestCase;
use App\Item;

class ItemTest extends TestCase {

    public function testEstadoInicialItem() {

        $item = new Item();
        
        //asserções do PHPUNit
        $this->assertEquals('', $item->getDescricao());
        $this->assertEquals(0, $item->getValor());

    }

    public function testGetSetDescricao() {

        $descricao = 'Cadeira de plástico';

        $item = new Item();
        $item->setDescricao($descricao);
        
        $this->assertEquals($descricao, $item->getDescricao());

    }

    /**
     * @dataProvider dataValores
     */
    public function testGetSetValor($valor) {

        $item = new Item();
        $item->setValor($valor);
        
        $this->assertEquals($valor, $item->getValor());

    }

    public function testItemValido() {

        $item = new Item();
        
        //submeter um item válido e retornar ok
        $item->setValor(55.90);
        $item->setDescricao('Cadeira de plástico');
        $this->assertEquals(true, $item->itemValido());

        //submeter um item inválido e retornar false (descricao)
        $item->setValor(55.90);
        $item->setDescricao('');
        $this->assertEquals(false, $item->itemValido());

        //submeter um item inválido e retornar false (valor)
        $item->setValor(0);
        $item->setDescricao('Cadeira de plástico');
        $this->assertEquals(false, $item->itemValido());

        //submeter um item inválido e retornar false
        $item->setValor(0);
        $item->setDescricao('');
        $this->assertEquals(false, $item->itemValido());
    }

    //Data Provider
    public function dataValores() {

        return [
            [100],
            [-2],
            [0]
        ];

    }

}