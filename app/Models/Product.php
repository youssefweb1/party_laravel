<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'description',
        'photo',
        'stock',
        'currency_id',
        'size',
        'condition',
        'status',
        'price',
        'vat',
        'discount',
        'color',
        'gender',
        'purity',
        'model_number',
        'product_weight',
        'discount_price',
        'is_featured',
        'cat_id',
        'child_cat_id',
        'brand_id'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

}