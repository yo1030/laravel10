<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Greatest extends Model
{
    use HasFactory;
    protected $fillable = [
      'x',
      'y',
      'z'
    ];
}
