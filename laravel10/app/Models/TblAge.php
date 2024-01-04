<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblAge extends Model
{
    use HasFactory;

    protected $fillable = ['age_class', 'age_range'];
}
