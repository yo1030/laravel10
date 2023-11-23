<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OpenCourse;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CourseMaster extends Model
{
    use HasFactory;

    /**
     * default value
     * @var array
     */
    protected $attributes = [
      'name'=>'default name'
    ];

    /**
    * The attributes that are mass assignable.
    * @var array<int, string>
    */
    protected $fillable = [
      'name',
    ];

    /**
    * 複数代入不可能な属性
    * @var array
    */
    protected $guarded = [
      'id'
    ];

   public function course_id(): HasMany
   {
        return $this->hasMany(OpenCourse::class);
   }
}
