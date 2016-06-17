<?php

use Faker\Factory as Faker;
use App\Models\Pedido;
use App\Repositories\PedidoRepository;

trait MakePedidoTrait {

    use MakeClienteTrait;

    /**
     * Create fake instance of Pedido and save it in database
     *
     * @param array $pedidoFields
     * @return Pedido
     */
    public function makePedido($pedidoFields = []) {
        /** @var PedidoRepository $pedidoRepo */
        $pedidoRepo = App::make(PedidoRepository::class);
        $theme = $this->fakePedidoData($pedidoFields);
        return $pedidoRepo->create($theme);
    }

    /**
     * Get fake instance of Pedido
     *
     * @param array $pedidoFields
     * @return Pedido
     */
    public function fakePedido($pedidoFields = []) {
        return new Pedido($this->fakePedidoData($pedidoFields));
    }

    /**
     * Get fake data of Pedido
     *
     * @param array $postFields
     * @return array
     */
    public function fakePedidoData($pedidoFields = []) {
        $fake = Faker::create();

        $formaPagamento = 1;
        $cliente = $this->makeCliente();

        return array_merge([
            'id_forma_pagamento' => $fake->randomDigitNotNull,
            'id_cliente' => $cliente->id,
            'id_endereco_entrega' => $fake->randomDigitNotNull,
            'id_cupom_desconto' => $fake->randomDigitNotNull,
            'ip' => $fake->word,
            'navegador' => $fake->word,
            'sistema' => $fake->word,
            'preco_frete' => $fake->randomDigitNotNull,
            'peso' => $fake->randomDigitNotNull,
            'total_compra' => $fake->randomDigitNotNull,
            'vl_desconto' => $fake->randomDigitNotNull,
            'vl_desconto_cartao' => $fake->randomDigitNotNull,
            'vl_acrescimo' => $fake->randomDigitNotNull,
            'total_pagar' => $fake->randomDigitNotNull,
            'status' => $fake->randomDigitNotNull,
            'quantidade_parcelas' => $fake->randomDigitNotNull,
            'email_enviado' => $fake->boolean(),
            'ligacao' => $fake->boolean(),
            'sessao' => $fake->word,
        ], $pedidoFields);
    }
}
