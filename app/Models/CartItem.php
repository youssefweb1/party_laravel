<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $table = 'carts';

    protected $fillable = ['user_id', 'product_id', 'quantity' , 'price' , 'amount'] ;

    /**
     * Get the user that owns the cart item.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the product that is in the cart item.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
