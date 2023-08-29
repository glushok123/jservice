<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EavAttributesValues extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    /** 
    *@var string
    */
    protected $table = 'eav_attributes_values';

    /** *@var array
    */
    protected $fillable = [
        'product_id',
        'attributes_id',
        'value',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    { 
        return $this->belongsTo(Product::class);  
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function attributes()
    { 
        return $this->belongsTo(EavAttribute::class);  
    }
}
