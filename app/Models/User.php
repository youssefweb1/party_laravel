<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'photo',
        'role',
        'google_id',
        'provider',
        'otp',
        'provider_id',
        'status',
        'remember_token',
        'country',
        'city',
        'province'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the cart items for the user.
     */
    public function cartItems()
    {
        return $this->hasMany(CartItem::class, 'user_id');
    }
    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }
}
