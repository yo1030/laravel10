<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;
    
     /**
     * The attributes that are mass assignable.
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'salary',
    ];

    /**
     * 複数代入不可能な属性
     * @var array
     */
    protected $guarded = [
        'id'
    ];
}
