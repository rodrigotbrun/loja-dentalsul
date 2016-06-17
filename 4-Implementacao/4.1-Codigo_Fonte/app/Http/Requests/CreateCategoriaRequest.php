<?php

namespace App\Http\Requests;

use App\Http\Requests\Abs\BaseCreateSetorRequest;
use App\Models\Categoria;
use App\Models\Departamento;

/**
 * Validação de Requests relacionadas a setores da empresa (Categorias, Subcategorias, Departamentos e Marcas)
 *
 * Atributos:
 * - nome
 * - menu_lateral
 * - menu_superior
 *
 * @package App\Http\Requests\Abs
 */
class CreateCategoriaRequest extends BaseCreateSetorRequest {

    /**
     * @var string
     */
    protected $tableName = Categoria::TABLE;

    /**
     * Regras de validação para dados relacionados a setores da empresa
     *
     * @return array
     */
    public function rules() {
        return array_merge(parent::rules(), [
            'id_departamento' => 'required|exists:'. Departamento::TABLE .',id',
            'nome' => "required|string|unique:{$this->tableName},nome",
        ]);
    }

}
