<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EavAttributesCategories extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    /** 
    *@var string
    */
    protected $table = 'eav_attributes_categories';

    /** *@var array
    */
    protected $fillable = [
        'category_id',
        'attributes_id',
        'sort',
    ];

    /** 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    { 
        return $this->belongsTo(ProductCategorie::class);  
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function attributes()
    { 
        return $this->belongsTo(EavAttribute::class);  
    }
}
