<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Class_A extends Model
{
    use HasFactory;

    protected $table = 'class_a_s';

    protected $fillable = [
        'name',
    ];
}
