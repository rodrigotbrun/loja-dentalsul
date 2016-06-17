<?php

namespace App\Http\Requests;

use App\Http\Requests\Abs\BaseCreateSetorRequest;
use App\Models\Departamento;

/**
 * Class CreateDepartamentoRequest
 * @package App\Http\Requests
 */
class CreateDepartamentoRequest extends BaseCreateSetorRequest {

    /**
     * @var string
     */
    protected $tableName = Departamento::TABLE;

    /**
     * Regras de validação para dados relacionados a setores da empresa
     *
     * @return array
     */
    public function rules() {
        return array_merge(parent::rules(), [
            'nome' => "required|string|unique:{$this->tableName},nome",
        ]);
    }

}
