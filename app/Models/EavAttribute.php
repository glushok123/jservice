<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EavAttribute extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    /** 
    *@var string
    */
    protected $table = 'eav_attributes';

    /** *@var array
    */
    protected $fillable = [
        'name',
        'description',
        'unit',
        'is_multiple',
        'value_type',
        'is_filterable',
        'is_required',
    ];
}
