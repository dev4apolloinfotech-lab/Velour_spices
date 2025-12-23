<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shiprocket extends Model
{
    use HasFactory;

    public $table = "ship_rocket_order";
    protected $fillable = [
        'id',
        'order_id',
        'created_at',
    ];
}
