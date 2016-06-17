<?php

namespace App\Models;

use App\Models\Abs\BaseModelSetor;

class Marca extends BaseModelSetor {

    const TABLE = 'marcas';
    public $table = self::TABLE;

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
        'follow' => 'boolean',
        'palavras_chave' => 'string',
        'indexar' => 'boolean',
        'menu_superior' => 'boolean',
        'visivel' => 'boolean',
        'menu_lateral' => 'boolean',
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
