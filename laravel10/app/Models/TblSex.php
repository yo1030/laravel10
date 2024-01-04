<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblSex extends Model
{
    use HasFactory;

    protected $fillable = ['sex_cd', 'sex'];
}
