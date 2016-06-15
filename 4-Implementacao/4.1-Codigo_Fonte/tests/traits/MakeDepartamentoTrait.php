<?php

use Faker\Factory as Faker;
use App\Models\Departamento;
use App\Repositories\DepartamentoRepository;

trait MakeDepartamentoTrait
{
    /**
     * Create fake instance of Departamento and save it in database
     *
     * @param array $departamentoFields
     * @return Departamento
     */
    public function makeDepartamento($departamentoFields = [])
    {
        /** @var DepartamentoRepository $departamentoRepo */
        $departamentoRepo = App::make(DepartamentoRepository::class);
        $theme = $this->fakeDepartamentoData($departamentoFields);
        return $departamentoRepo->create($theme);
    }

    /**
     * Get fake instance of Departamento
     *
     * @param array $departamentoFields
     * @return Departamento
     */
    public function fakeDepartamento($departamentoFields = [])
    {
        return new Departamento($this->fakeDepartamentoData($departamentoFields));
    }

    /**
     * Get fake data of Departamento
     *
     * @param array $postFields
     * @return array
     */
    public function fakeDepartamentoData($departamentoFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nome' => $fake->word,
            'alias' => $fake->word,
            'follow' => true,
            'indexar' => true,
            'visivel' => true,
            'menu_superior' => true,
            'menu_lateral' => true,
            'data_deletado' => null
        ], $departamentoFields);
    }
}
