<?php

namespace App\Http\Requests;

use App\Http\Requests\Abs\BaseCreateRequest;
use App\Models\Endereco;

class CreateEnderecoRequest extends BaseCreateRequest {

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return Endereco::$rules;
    }
}
