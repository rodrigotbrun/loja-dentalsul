<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Endereco",
 *      required={},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="id_cliente",
 *          description="id_cliente",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="principal",
 *          description="principal",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="entrega",
 *          description="entrega",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="cep",
 *          description="cep",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="rua",
 *          description="rua",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="complemento",
 *          description="complemento",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="numero",
 *          description="numero",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="bairro",
 *          description="bairro",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="cidade",
 *          description="cidade",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="uf",
 *          description="uf",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="ponto_referencia",
 *          description="ponto_referencia",
 *          type="string"
 *      )
 * )
 */
class Endereco extends Model
{
    use SoftDeletes;

    public $table = 'clientes_enderecos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


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
        'principal' => 'string',
        'entrega' => 'string',
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
    public static $rules = [
        
    ];
}
