<?php

namespace App\Models;

use App\Models\Abs\BaseModelSetor;

/**
 * Class Categoria
 * @package App\Models
 */
class Categoria extends BaseModelSetor {

    const TABLE = 'categorias';

    /**
     * @var string
     */
    public $table = self::TABLE;

    /**
     * @var array
     */
    public $fillable = [
        'id_departamento',
        'nome',
        'alias',
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
        'id_departamento' => 'integer',
        'nome' => 'string',
        'alias' => 'string',
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departamento() {
        return $this->hasOne('App\Models\Departamento', 'id', 'id_departamento');
    }

}
