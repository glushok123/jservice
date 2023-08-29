<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'product_images';

    /**
     * @var array
     */
    protected $fillable = ['product_id', 'thumbnail', 'full'];

    /**
     * @var array
     */
    protected $casts = [
        'product_id'    =>  'integer',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function setThumbnailAttribute($value)
    {
        $attribute_name = "thumbnail";
        $disk = "public";
        $destination_path = "/product_images";
        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }

    public function setFullAttribute($value)
    {
        $attribute_name = "full";
        $disk = "public";
        $destination_path = "/product_images";
        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }
}
