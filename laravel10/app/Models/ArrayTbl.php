<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArrayTbl extends Model
{
    use HasFactory;
    protected $fillable = [
        'key',
        'col1',
        'col2',
        'col3',
        'col4',
        'col5',
        'col6',
        'col7',
        'col8',
        'col9',
        'col10'
    ];
}
