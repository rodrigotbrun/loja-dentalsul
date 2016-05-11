<?php

namespace App\Models;

use App\Models\Abs\BaseModelSetor;

class Marca extends BaseModelSetor {

    public $table = 'marcas';

    public $fillable = [
        'nome',
        'alias',
        'diretorio',
        'follow',
        'palavras_chave',
        'indexar',
        'menu_superior',
        'visivel',
        'menu_lateral',
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
        'nome' => 'string',
        'alias' => 'string',
        'diretorio' => 'string',
        'follow' => 'string',
        'palavras_chave' => 'string',
        'indexar' => 'string',
        'menu_superior' => 'string',
        'visivel' => 'string',
        'menu_lateral' => 'string',
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
