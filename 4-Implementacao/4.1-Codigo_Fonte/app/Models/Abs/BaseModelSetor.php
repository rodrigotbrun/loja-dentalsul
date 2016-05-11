<?php

namespace App\Models\Abs;

abstract class BaseModelSetor extends BaseModelSEO {

    public $attributes = [
        'follow' => 'S',
        'visivel' => 'S',
        'indexar' => 'S',
        'menu_superior' => 'N',
        'menu_lateral' => 'S',
    ];

}