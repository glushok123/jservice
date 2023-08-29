<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RepairSubCategory;
use App\Models\RepairCategory;

class RepairReview extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $table = 'repair_reviews';

    protected $fillable = [
        'user_name',
        'name_image',
        'comment',
        'date',
        'sub_category_id',
        'category_id',
    ];


    public function getNameCategoryAttribute()
    {
        $category = RepairCategory::where('id', $this->category_id)->first();
        if(empty($category)) {
            return '';
        }
        return $category->name;
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
    public function category()
    { 
        return $this->belongsTo(RepairCategory::class, 'category_id', 'id');  
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sub_category()
    { 
        return $this->belongsTo(RepairSubCategory::class, 'sub_category_id', 'id');  
    }
}
