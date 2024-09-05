<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact_us'; 

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'message',
    ];
}
