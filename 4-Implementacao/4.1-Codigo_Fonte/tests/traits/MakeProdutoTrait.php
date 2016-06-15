<?php

use Faker\Factory as Faker;
use App\Models\Produto;
use App\Repositories\ProdutoRepository;

trait MakeProdutoTrait {

    use MakeSubcategoriaTrait, MakeMarcaTrait;

    /**
     * Create fake instance of Produto and save it in database
     *
     * @param array $produtoFields
     * @return Produto
     */
    public function makeProduto($produtoFields = []) {
        /** @var ProdutoRepository $produtoRepo */
        $produtoRepo = App::make(ProdutoRepository::class);
        $theme = $this->fakeProdutoData($produtoFields);
        return $produtoRepo->create($theme);
    }

    /**
     * Get fake instance of Produto
     *
     * @param array $produtoFields
     * @return Produto
     */
    public function fakeProduto($produtoFields = []) {
        return new Produto($this->fakeProdutoData($produtoFields));
    }

    /**
     * Get fake data of Produto
     *
     * @param array $postFields
     * @return array
     */
    public function fakeProdutoData($produtoFields = []) {
        $fake = Faker::create();

        $subcategoria = $this->makeSubcategoria();
        $marca = $this->makeMarca();

        return array_merge([
            'id_subcategoria' => $subcategoria->id,
            'id_marca' => $marca->id,
            'nome' => $fake->word,
            'alias' => $fake->word,
            'nome_agregador' => $fake->word,
            'nome_busca' => $fake->word,
            'tipo_lista' => '',
            'disponibilidade' => $fake->word,
            'qtd_dias_dispor' => $fake->randomDigitNotNull,
            'venda_sem_estoque' => $fake->boolean,
            'estoque_redutor_produto' => $fake->randomDigitNotNull,
            'codigo_referencia' => $fake->word,
            'preco' => $fake->randomDigitNotNull,
            'depreco' => $fake->randomDigitNotNull,
            'peso' => $fake->randomDigitNotNull,
            'descricao' => $fake->text,
            'visivel' => $fake->boolean,
            'estoque' => $fake->randomDigitNotNull,
            'mostrar_vitrine' => true,
            'flag' => $fake->word,
            'tipo_frete' => $fake->word,
            'atacado' => $fake->boolean,
            'lancamento' => $fake->boolean,
            'valor_frete' => $fake->randomDigitNotNull,
            'valor_frete_somar' => $fake->boolean,
            'frete_gratis' => $fake->boolean,
            'frete_gratis_regiao' => $fake->word,
            'comprimento' => $fake->randomDigitNotNull,
            'largura' => $fake->randomDigitNotNull,
            'altura' => $fake->randomDigitNotNull,
            'permite_amostra' => $fake->boolean,
            'permite_pac' => $fake->boolean,
            'permite_sedex' => $fake->boolean,
            'permite_esedex' => $fake->boolean,
            'permite_transportadora' => $fake->boolean,
            'codigo_mercadolivre' => $fake->word,
            'titulo_mercadolivre' => $fake->word,
            'subtitulo_mercadolivre' => $fake->word,
            'palavras_chave' => $fake->text,
            'follow' => $fake->boolean,
            'indexar' => $fake->boolean,
            'desconto_pessoa' => $fake->randomDigitNotNull,
            'frete_individual' => $fake->boolean,
            'codigo_todaoferta' => $fake->word,
            'titulo_todaoferta' => $fake->word,
            'categoria_todaoferta' => $fake->word,
            'subcategoria_todaoferta' => $fake->word,
        ], $produtoFields);
    }
}
