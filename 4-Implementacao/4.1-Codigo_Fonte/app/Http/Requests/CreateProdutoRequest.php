<?php

namespace App\Http\Requests;

use App\Http\Requests\Abs\BaseCreateRequest;
use App\Models\Produto;

class CreateProdutoRequest extends BaseCreateRequest {

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return Produto::$rules;
    }
}
