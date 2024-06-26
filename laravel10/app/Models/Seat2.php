<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'seat',
        'line_id',
        'status'
    ];
}
