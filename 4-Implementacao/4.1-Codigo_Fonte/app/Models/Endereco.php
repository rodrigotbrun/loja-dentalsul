<?php

namespace App\Models;

use App\Models\Abs\BaseModel;

class Endereco extends BaseModel {

    public $table = 'clientes_enderecos';

    public $fillable = [
        'id_cliente',
        'principal',
        'entrega',
        'cep',
        'rua',
        'complemento',
        'numero',
        'bairro',
        'cidade',
        'uf',
        'ponto_referencia',
        'data_deletado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_cliente' => 'integer',
        'principal' => 'boolean',
        'entrega' => 'boolean',
        'cep' => 'string',
        'rua' => 'string',
        'complemento' => 'string',
        'numero' => 'string',
        'bairro' => 'string',
        'cidade' => 'string',
        'uf' => 'string',
        'ponto_referencia' => 'string',
        'data_deletado' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente() {
        return $this->hasOne('App\Model\Cliente', 'id', 'id_cliente');
    }
    
}
