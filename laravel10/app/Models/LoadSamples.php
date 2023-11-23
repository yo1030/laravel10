<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoadSamples extends Model
{
    use HasFactory;
    protected $fillable = [
      'sample_date',
      'load_val'
    ];
}
