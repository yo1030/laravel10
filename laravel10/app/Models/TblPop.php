<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblPop extends Model
{
    use HasFactory;

    protected $fillable = ['pref_name', 'age_class', 'sex_cd', 'population'];
}
