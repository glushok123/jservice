<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\RepairSubCategory; 
use App\Models\RepairReview; 

class RepairCategory extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $table = 'repair_categories';

    protected $fillable = [
        'name',
        'title',
        'slug',
        'image',
        'min_price',
        'min_time',
        'description',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'sort',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getSubCategoryAttribute()
    {
        return RepairSubCategory::where('parent_id', $this->id)->get();
    }

    /**
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function getReviewAttribute()
   {
       return RepairReview::where('category_id', $this->id)->get();
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
}