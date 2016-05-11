<?php

namespace App\Models;

use App\Models\Abs\BaseModel;

class Pedido extends BaseModel {

    public $table = 'pedidos';

    public $fillable = [
        'id_forma_pagamento',
        'id_cliente',
        'id_endereco_entrega',
        'id_cupom_desconto',
        'ip',
        'navegador',
        'sistema',
        'preco_frete',
        'peso',
        'total_compra',
        'vl_desconto',
        'vl_desconto_cartao',
        'vl_acrescimo',
        'total_pagar',
        'status',
        'quantidade_parcelas',
        'email_enviado',
        'ligacao',
        'sessao',
        'data_criado',
        'data_atualizado',
        'data_finalizado',
        'data_deletado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_forma_pagamento' => 'integer',
        'id_cliente' => 'integer',
        'id_endereco_entrega' => 'integer',
        'id_cupom_desconto' => 'integer',
        'ip' => 'string',
        'navegador' => 'string',
        'sistema' => 'string',
        'preco_frete' => 'float',
        'peso' => 'float',
        'total_compra' => 'float',
        'vl_desconto' => 'float',
        'vl_desconto_cartao' => 'float',
        'vl_acrescimo' => 'float',
        'total_pagar' => 'float',
        'status' => 'integer',
        'quantidade_parcelas' => 'integer',
        'email_enviado' => 'boolean',
        'ligacao' => 'boolean',
        'sessao' => 'string',
        'data_criado' => 'datetime',
        'data_atualizado' => 'datetime',
        'data_finalizado' => 'datetime',
        'data_deletado' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
}
