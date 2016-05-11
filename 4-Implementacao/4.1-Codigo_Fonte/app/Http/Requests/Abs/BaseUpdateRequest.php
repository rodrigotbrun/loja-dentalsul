<?php

namespace App\Http\Requests\Abs;

use App\Http\Requests\Request;

abstract class BaseUpdateRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Lista de regras para validação da request no modo CREATE
     *
     * @return array
     */
    public abstract function rules();
}
