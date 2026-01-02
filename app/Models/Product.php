<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'categoryId',
        'subcategoryid',
        'productname',
        'slugname',
        'description',
        'rate',
        'Keyword',
        'cut_price',
        'usd_rate',
        'usd_cut_price',
        'isBestSeller',
        'isNewArrival',
        'isGiftBoxes',
        'isComboPacks',
        'iStatus',
        'isDelete',
        'created_at',
        'updated_at',
        'strIP',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'head',
        'body',
        'height',
        'length',
        'breadth',
        'weight'
    ];
    protected $casts = [
        'rate' => 'decimal:2',
        'cut_price' => 'decimal:2',
        'usd_rate' => 'decimal:2',
        'usd_cut_price' => 'decimal:2',
        'AmountWithOutGST' => 'decimal:2',
        'iGST' => 'integer',
        'iGSTAmount' => 'decimal:2',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryId', 'id');
    }

    public function photos()
    {
        return $this->hasMany(Productphotos::class, 'productid', 'productphotosid');
    }

    public function firstPhoto()
    {
        return $this->hasOne(Productphotos::class, 'productid', 'productphotosid')
            ->orderBy('id');
    }
}
