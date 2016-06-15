<?php

use Faker\Factory as Faker;
use App\Models\Subcategoria;
use App\Repositories\SubcategoriaRepository;

trait MakeSubcategoriaTrait {
    use MakeCategoriaTrait;

    /**
     * Create fake instance of Subcategoria and save it in database
     *
     * @param array $subcategoriaFields
     * @return Subcategoria
     */
    public function makeSubcategoria($subcategoriaFields = []) {
        /** @var SubcategoriaRepository $subcategoriaRepo */
        $subcategoriaRepo = App::make(SubcategoriaRepository::class);
        $theme = $this->fakeSubcategoriaData($subcategoriaFields);
        return $subcategoriaRepo->create($theme);
    }

    /**
     * Get fake instance of Subcategoria
     *
     * @param array $subcategoriaFields
     * @return Subcategoria
     */
    public function fakeSubcategoria($subcategoriaFields = []) {
        return new Subcategoria($this->fakeSubcategoriaData($subcategoriaFields));
    }

    /**
     * Get fake data of Subcategoria
     *
     * @param array $postFields
     * @return array
     */
    public function fakeSubcategoriaData($subcategoriaFields = []) {
        $fake = Faker::create();

        $cat = $this->makeCategoria(); 
        
        return array_merge([
            'id_categoria' => $cat->id,
            'nome' => $fake->word,
            'alias' => $fake->word,
            'palavras_chave' => $fake->text,
            'follow' => $fake->boolean,
            'indexar' => $fake->boolean,
            'visivel' => $fake->boolean,
            'menu_superior' => $fake->boolean,
            'menu_lateral' => $fake->boolean,
        ], $subcategoriaFields);
    }
}
