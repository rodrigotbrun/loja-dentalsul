<?php

namespace App\Http\Requests\Abs;

/**
 * Validação de Requests que tenham SEO.
 *
 * Atributos:
 * - alias
 * - follow
 * - indexar
 * - palavras_chave
 * - visivel
 *
 * @package App\Http\Requests\Abs
 */
abstract class BaseUpdateSEORequest extends BaseUpdateRequest {

    /**
     * Regras de validação para dados relacionados a setores da empresa
     * @return array
     */
    public function rules() {
        return [
            'alias' => 'required|string',
        ];
    }

}
