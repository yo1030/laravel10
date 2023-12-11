<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArrayTbl2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'key',
        'i',
        'val'
    ];
}
