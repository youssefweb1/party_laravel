<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProblemReport extends Model
{
    protected $fillable = [
        'name',
        'subject',
        'message',
    ];
}
