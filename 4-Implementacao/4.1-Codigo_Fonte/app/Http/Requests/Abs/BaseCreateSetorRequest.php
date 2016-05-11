<?php

namespace App\Http\Requests\Abs;

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
abstract class BaseCreateSetorRequest extends BaseCreateSEORequest {

    /**
     * Regras de validação para dados relacionados a setores da empresa
     * @return array
     */
    public function rules() {
        return array_merge(parent::rules(), [
            // TODO
        ]);
    }

}
