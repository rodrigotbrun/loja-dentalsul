<?php

namespace App\Models;

use App\Models\Abs\BaseModelSetor;

class Categoria extends BaseModelSetor {

    public $table = 'categorias';

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departamento() {
        return $this->hasOne('App\Models\Departamento', 'id', 'id_departamento');
    }

}
