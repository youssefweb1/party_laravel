<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    use HasFactory;

    protected $table = 'product_reviews';

    protected $fillable = ['user_id', 'product_id', 'rate', 'review', 'status'];

    protected $attributes = [
        'status' => 'active',
    ];


    // Define relationship with User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define relationship with Product model
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
