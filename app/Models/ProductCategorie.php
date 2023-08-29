<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProductCategorie extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    /** 
    *@var string
    */
    protected $table = 'product_categories';

    /** *@var array
    */
    protected $fillable = [
        'name',
        'slug',
        'title',
        'description',
        'parent_id',
        'active',
    ];

    /**
    *
    * @param $value
    */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
