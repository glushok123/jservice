<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\RepairCategory;
use App\Models\RepairReview;
use App\Models\RepairService;
use App\Models\RepairImageSubCategory;
use App\Models\RepairQuestionSubCategory;
use App\Models\RepairBrand;

class RepairSubCategory extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $table = 'repair_sub_categories';

    protected $fillable = [
        'name',
        'title',
        'slug',
        'image',
        'small_image',
        'min_price',
        'min_time',
        'description',
        'template_description_brand',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'parent_id',
        'active',
    ];

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = "uploads";
        $destination_path = "/images/upload";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }

    public function setSmallImageAttribute($value)
    {
        $attribute_name = "small_image";
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

    public function getNameCategoryAttribute()
    {
        $category = RepairCategory::where('id', $this->parent_id)->first();
        return $category->name;
    }
    
    public function getImageGalleryAttribute()
    {
        return RepairImageSubCategory::where('sub_category_id', $this->parent_id)->get();
    }

    public function getQuestionAttribute()
    {
        return RepairQuestionSubCategory::where('sub_category_id', $this->id)->get();
    }

    public function getBrandsAttribute()
    {
        return RepairBrand::where('sub_category_id', $this->id)->get();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    { 
        return $this->belongsTo(RepairCategory::class, 'parent_id', 'id');  
    }

    public function getServiceAttribute()
    {
        return RepairService::where('sub_category_id', $this->id)->get();
    }

    /**
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function getReviewAttribute()
   {
       return RepairReview::where('sub_category_id', $this->id)->get();
   }
}
