<?php

namespace App\Repositories;

use App\Models\Departamento;
use InfyOm\Generator\Common\BaseRepository;

class DepartamentoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Departamento::class;
    }
}
