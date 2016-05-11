<?php

namespace App\Models\Abs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class BaseModel extends Model {
    use SoftDeletes;

    const CREATED_AT = 'data_criado';
    const UPDATED_AT = 'data_atualizado';
    const DELETED_AT = 'data_deletado';

    protected $dates = ['data_deletado'];

}
