<?php

namespace App\Http\Requests;

use App\Http\Requests\Abs\BaseUpdateRequest;

class UpdatePedidoRequest extends BaseUpdateRequest {

    /**
     * Lista de regras para validação da request no modo CREATE
     *
     * @return array
     */
    public function rules() {
        return [];
    }
    
}
