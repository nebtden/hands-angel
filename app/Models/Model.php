<?php
/**
 * Created by PhpStorm.
 * User: Marser
 * Date: 2017/11/10
 * Time: 10:07
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public static function options($id)
    {
        if (! $self = static::find($id)) {
            return [];
        }

        return $self->pluck('name', 'id');
    }

}