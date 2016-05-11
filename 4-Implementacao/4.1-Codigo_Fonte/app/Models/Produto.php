<?php

namespace App\Models;

use App\Models\Abs\BaseModelSEO;

class Produto extends BaseModelSEO {

    public $table = 'produtos';

    public $fillable = [
        'id_subcategoria',
        'id_marca',
        'nome',
        'alias',
        'nome_agregador',
        'nome_busca',
        'mostrar_busca',
        'tipo_lista',
        'disponibilidade',
        'data_disponibilidade',
        'qtd_dias_dispor',
        'venda_sem_estoque',
        'estoque_redutor_produto',
        'codigo_referencia',
        'preco',
        'depreco',
        'peso',
        'descricao',
        'visivel',
        'estoque',
        'mostrar_vitrine',
        'flag',
        'tipo_frete',
        'atacado',
        'lancamento',
        'valor_frete',
        'valor_frete_somar',
        'frete_gratis',
        'frete_gratis_regiao',
        'comprimento',
        'largura',
        'altura',
        'permite_amostra',
        'permite_pac',
        'permite_sedex',
        'permite_esedex',
        'permite_transportadora',
        'codigo_mercadolivre',
        'titulo_mercadolivre',
        'subtitulo_mercadolivre',
        'palavras_chave',
        'follow',
        'indexar',
        'desconto_pessoa',
        'frete_individual',
        'codigo_todaoferta',
        'titulo_todaoferta',
        'categoria_todaoferta',
        'subcategoria_todaoferta',
        'codigo_buscape',
        'data_criado',
        'data_atualizado',
        'data_deletado',
        'tipo_estoque'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_subcategoria' => 'integer',
        'id_marca' => 'integer',
        'nome' => 'string',
        'alias' => 'string',
        'nome_agregador' => 'string',
        'nome_busca' => 'string',
        'mostrar_busca' => 'string',
        'tipo_lista' => 'string',
        'disponibilidade' => 'string',
        'data_disponibilidade' => 'date',
        'qtd_dias_dispor' => 'integer',
        'venda_sem_estoque' => 'string',
        'estoque_redutor_produto' => 'integer',
        'codigo_referencia' => 'string',
        'preco' => 'float',
        'depreco' => 'float',
        'peso' => 'float',
        'descricao' => 'string',
        'visivel' => 'string',
        'estoque' => 'float',
        'mostrar_vitrine' => 'string',
        'flag' => 'string',
        'tipo_frete' => 'string',
        'atacado' => 'string',
        'lancamento' => 'string',
        'valor_frete' => 'float',
        'valor_frete_somar' => 'string',
        'frete_gratis' => 'string',
        'frete_gratis_regiao' => 'string',
        'comprimento' => 'float',
        'largura' => 'float',
        'altura' => 'float',
        'permite_amostra' => 'string',
        'permite_pac' => 'string',
        'permite_sedex' => 'string',
        'permite_esedex' => 'string',
        'permite_transportadora' => 'string',
        'codigo_mercadolivre' => 'string',
        'titulo_mercadolivre' => 'string',
        'subtitulo_mercadolivre' => 'string',
        'palavras_chave' => 'string',
        'follow' => 'string',
        'indexar' => 'string',
        'desconto_pessoa' => 'float',
        'frete_individual' => 'string',
        'codigo_todaoferta' => 'string',
        'titulo_todaoferta' => 'string',
        'categoria_todaoferta' => 'string',
        'subcategoria_todaoferta' => 'string',
        'codigo_buscape' => 'string',
        'data_criado' => 'datetime',
        'data_atualizado' => 'datetime',
        'data_deletado' => 'datetime',
        'tipo_estoque' => 'string'
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
    public function marca() {
        return $this->hasOne('App\Models\Marca', 'id', 'id_marca');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function subcategoria() {
        return $this->hasOne('App\Models\Subcategoria', 'id', 'id_subcategoria');
    }

}
