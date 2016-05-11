<?php

namespace App\Models;

use App\Models\Abs\BaseModelSetor;

class Subcategoria extends BaseModelSetor {

    public $table = 'subcategorias';

    public $fillable = [
        'id_categoria',
        'nome',
        'alias',
        'palavras_chave',
        'follow',
        'indexar',
        'visivel',
        'menu_superior',
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
        'id_categoria' => 'integer',
        'nome' => 'string',
        'alias' => 'string',
        'palavras_chave' => 'string',
        'follow' => 'boolean',
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria() {
        return $this->hasOne('App\Models\Categoria', 'id', 'id_categoria');
    }

}
