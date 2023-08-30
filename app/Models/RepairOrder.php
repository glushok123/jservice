<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class RepairOrder extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
    use Notifiable;

    protected $table = 'repair_orders';

    protected $fillable = [
        'name_form',
        'name',
        'phone',
        'category',
        'sub_category',
        'brand',
        'service',
        'status',
    ];

}
