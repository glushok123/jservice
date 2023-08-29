<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\RepairSubCategory;
class RepairService extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $table = 'repair_services';

    protected $fillable = [
        'name',
        'slug',
        'title',
        'min_price',
        'min_time',
        'description_header',
        'description',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'active',
        'sub_category_id',
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

    public function getNameSubCategoryAttribute()
    {
        $subCategory = RepairSubCategory::where('id', $this->sub_category_id)->first();
        return $subCategory->name;
    }

        /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sub_category()
    { 
        return $this->belongsTo(RepairSubCategory::class, 'sub_category_id', 'id');  
    }
}
