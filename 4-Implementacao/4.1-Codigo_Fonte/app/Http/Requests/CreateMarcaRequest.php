<?php

namespace App\Http\Requests;

use App\Http\Requests\Abs\BaseCreateSetorRequest;
use App\Models\Marca;

/**
 * Class CreateMarcaRequest
 * @package App\Http\Requests
 */
class CreateMarcaRequest extends BaseCreateSetorRequest {

    /**
     * @var string
     */
    protected $tableName = Marca::TABLE;

    /**
     * Regras de validação para dados relacionados a setores da empresa
     *
     * @return array
     */
    public function rules() {
        return array_merge(parent::rules(), [
            'nome' => "required|string|unique:{$this->tableName},nome",
            'diretorio' => 'filled|string',
        ]);
    }

}
