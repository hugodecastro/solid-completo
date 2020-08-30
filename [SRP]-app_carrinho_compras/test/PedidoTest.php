<?php

use App\Pedido;
use PHPUnit\Framework\TestCase;

class PedidoTest extends TestCase {

    public function testEstadoInicial() {
        $pedido = new Pedido();

        $this->assertEquals('aberto', $pedido->getStatus());
        $this->assertIsObject($pedido->getCarrinhoCompra());
    }

    /**
     * @dataProvider dataStatusValores
     */
    public function testGetSetStatus($status) {

        $pedido = new Pedido();
        $pedido->setStatus($status);

        $this->assertEquals($status, $pedido->getStatus());

    }

    public function dataStatusValores() {
        return [
            ['aberto'],
            ['fechado'],
            ['teste']
        ];
    }

    public function testConfirmarCarrinhoVazio() {

        $pedido = new Pedido();

        $this->assertEquals(false, $pedido->confirmar());

    }

}