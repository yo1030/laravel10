<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupPart extends Model
{
    use HasFactory;

    protected $fillable = ['sup', 'part'];
}
