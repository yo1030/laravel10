<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblA extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'col_1',
        'col_2',
        'col_3'
    ];

    public $timestamps = false;
}
