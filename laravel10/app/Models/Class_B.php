<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Class_B extends Model
{
    use HasFactory;

    protected $table = 'class_b_s';

    protected $fillable = [
        'name',
    ];
}
