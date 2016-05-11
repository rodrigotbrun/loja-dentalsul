<?php

namespace App\Http\Requests;

use App\Http\Requests\Abs\BaseCreateRequest;
use App\Models\Pedido;

class CreatePedidoRequest extends BaseCreateRequest {

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return Pedido::$rules;
    }
}
