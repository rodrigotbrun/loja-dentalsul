<?php

namespace App\Models;

use App\Models\Abs\BaseModel;

class Cliente extends BaseModel {

    public $table = 'clientes';

    public $fillable = [
        'profissional',
        'parceiro',
        'tipo',
        'nome',
        'email',
        'senha',
        'cpf',
        'rg',
        'nome_fantasia',
        'razao_social',
        'cnpj',
        'ie',
        'telefone',
        'celular',
        'data_nascimento',
        'sexo',
        'receber_informativos',
        'receber_email',
        'ativado',
        'receber_sms',
        'data_atualizado',
        'data_criado',
        'data_deletado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'profissional' => 'string',
        'parceiro' => 'string',
        'tipo' => 'string',
        'nome' => 'string',
        'email' => 'string',
        'senha' => 'string',
        'cpf' => 'string',
        'rg' => 'string',
        'nome_fantasia' => 'string',
        'razao_social' => 'string',
        'cnpj' => 'string',
        'ie' => 'string',
        'telefone' => 'string',
        'celular' => 'string',
        'data_nascimento' => 'date',
        'sexo' => 'string',
        'receber_informativos' => 'string',
        'receber_email' => 'string',
        'ativado' => 'string',
        'receber_sms' => 'string',
        'data_atualizado' => 'datetime',
        'data_criado' => 'datetime',
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
