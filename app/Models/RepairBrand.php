<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\RepairSubCategory;

class RepairBrand extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $table = 'repair_brands';

    protected $fillable = [
        'name',
        'title',
        'slug',
        'image',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'sub_category_id',
        'active',
    ];

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = "uploads";
        $destination_path = "/images/upload";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }

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
        if(empty($subCategory)) {
            return '';
        }
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
