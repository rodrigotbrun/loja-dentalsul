<?php

namespace App\Http\Requests;

use App\Http\Requests\Abs\BaseCreateRequest;
use App\Models\Marca;
use App\Models\Produto;
use App\Models\Subcategoria;

/**
 * Class CreateProdutoRequest
 * @package App\Http\Requests
 */
class CreateProdutoRequest extends BaseCreateRequest {

    /**
     * @var string
     */
    protected $tableName = Produto::TABLE;

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return array_merge(parent::rules(), [
            'id_subcategoria' => 'required|exists:' . Subcategoria::TABLE . ',id',
            'id_marca' => 'required|exists:' . Marca::TABLE . ',id',
            'nome' => "required|string|unique:{$this->tableName},nome",
            'nome_agregador' => 'filled|string',
            'nome_busca' => 'filled|string',
            'mostrar_busca' => 'required|boolean',
//            'tipo_lista',
            'disponibilidade' => 'required|string',
            'data_disponibilidade' => 'filled|date',
            'qtd_dias_dispor' => 'filled|integer',
            'venda_sem_estoque' => 'filled|boolean',
            'estoque_redutor_produto' => 'filled|integer',
            'codigo_referencia' => "filled|string|unique:{$this->tableName},codigo_referencia",
            'preco' => 'required|min:0',
            'depreco' => 'required|min:0',
            'peso' => 'required|min:0',
            'descricao' => 'filled|string',
            'estoque' => 'filled|integer',
//            'flag' => 'required|in',
//            'tipo_frete',
            'atacado' => 'filled|boolean',
            'lancamento' => 'filled|boolean',
//            'valor_frete',
//            'valor_frete_somar',
            'frete_gratis' => 'filled|boolean',
//            'frete_gratis_regiao',
//            'comprimento',
//            'largura',
//            'altura',
            'permite_amostra' => 'filled|boolean',
            'permite_pac' => 'filled|boolean',
            'permite_sedex' => 'filled|boolean',
            'permite_esedex' => 'filled|boolean',
            'permite_transportadora' => 'filled|boolean',
            'codigo_mercadolivre' => 'string',
            'titulo_mercadolivre' => 'string',
            'subtitulo_mercadolivre' => 'string',
            'desconto_pessoa' => 'integer|min:0',
//            'frete_individual',
            'codigo_todaoferta' => 'string',
            'titulo_todaoferta' => 'string',
            'categoria_todaoferta' => 'string',
            'subcategoria_todaoferta' => 'string',
            'codigo_buscape' => 'string',
//            'tipo_estoque'
        ]);
    }
}
