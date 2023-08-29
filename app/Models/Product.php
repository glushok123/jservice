<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    /** 
    *@var string
    */
    protected $table = 'products';

    /** *@var array
    */
    protected $fillable = [
        'brand_id', 
        'category_id', 
        'name', 
        'slug', 
        'description', 
        'quantity', 
        'purchase_price', 
        'price', 
        'last_price',
        'mrg',
        'active',
    ];

    /** *@var array
    */
    protected $casts = [
        'quantity' => 'integer', 
        'brand_id' => 'integer',
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

    /** 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function brand()
    { 
        return $this->belongsTo(Brand::class);  
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    { 
        return $this->belongsTo(ProductCategorie::class);  
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
