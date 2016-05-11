<?php

namespace App\Models;

use App\Models\Abs\BaseModel;
use App\Models\Abs\BaseModelSetor;

class Departamento extends BaseModelSetor {

    public $table = 'departamentos';

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
        'follow' => 'string',
        'palavras_chave' => 'string',
        'indexar' => 'string',
        'visivel' => 'string',
        'menu_superior' => 'string',
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
