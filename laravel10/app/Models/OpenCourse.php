<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenCourse extends Model
{
    use HasFactory;

    /**
    * The attributes that are mass assignable.
    * @var array<int, string>
    */
    protected $fillable = [
       'month',
       'course_id',
    ];

   /**
    * 複数代入不可能な属性
    * @var array
    */
    protected $guarded = [
        'id'
    ];
}
