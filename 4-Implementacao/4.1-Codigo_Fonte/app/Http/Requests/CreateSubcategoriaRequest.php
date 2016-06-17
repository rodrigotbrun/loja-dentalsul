<?php

namespace App\Http\Requests;

use App\Http\Requests\Abs\BaseCreateSetorRequest;
use App\Models\Categoria;
use App\Models\Subcategoria;

/**
 * Class CreateSubcategoriaRequest
 * @package App\Http\Requests
 */
class CreateSubcategoriaRequest extends BaseCreateSetorRequest {

    /**
     * @var string
     */
    protected $tableName = Subcategoria::TABLE;

    /**
     * Regras de validação para dados relacionados a setores da empresa
     *
     * @return array
     */
    public function rules() {
        return array_merge(parent::rules(), [
            'id_categoria' => 'required|exists:' . Categoria::TABLE . ',id',
            'nome' => "required|string|unique:{$this->tableName},nome",
        ]);
    }

}
