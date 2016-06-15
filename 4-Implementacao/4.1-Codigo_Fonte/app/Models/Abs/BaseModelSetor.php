<?php

namespace App\Models\Abs;

abstract class BaseModelSetor extends BaseModelSEO {

    public $attributes = [
        'follow' => true,
        'visivel' => true,
        'indexar' => true,
        'menu_superior' => false,
        'menu_lateral' => true,
    ];

}