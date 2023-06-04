<?php

namespace App\Modules\Invenstory\Entity;

use Illuminate\Database\Eloquent\Model;
/**
 * @property string $name
 * @property string $code
 * @property int $id
 */
class Category extends Model
{
    protected $table="inv_category";
}
