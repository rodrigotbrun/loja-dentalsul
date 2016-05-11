<?php

namespace App\Repositories;

use App\Models\Subcategoria;
use InfyOm\Generator\Common\BaseRepository;

class SubcategoriaRepository extends BaseRepository
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
        return Subcategoria::class;
    }
}
