<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class RepairImageSubCategory extends Model
{
    use HasFactory;

    protected $table = 'repair_image_sub_categories';

    protected $fillable = [
        'name',
        'sub_category_id',
    ];
}
