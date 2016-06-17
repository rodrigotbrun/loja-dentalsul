<?php

namespace App\Models;

use App\Models\Abs\BaseModel;
use App\Models\Abs\BaseModelSetor;

class Departamento extends BaseModelSetor {

    const TABLE = 'departamentos';

    public $table = self::TABLE;

    public $fillable = [
        'nome',
        'alias',
        'follow',
        'palavras_chave',
        'indexar',
        'visivel',
        'menu_superior',
        'menu_lateral',
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
        'follow' => 'boolean',
        'palavras_chave' => 'string',
        'indexar' => 'boolean',
        'visivel' => 'boolean',
        'menu_superior' => 'boolean',
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
