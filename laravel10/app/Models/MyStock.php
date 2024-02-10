<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyStock extends Model
{
    use HasFactory;

    protected $fillable = [
        'deal_date',
        'price'
    ];
}
