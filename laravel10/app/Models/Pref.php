<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pref extends Model
{
    use HasFactory;
    /**
     * @var bool timestamp → created_at, updated_at
     */
    // public $timestamps = false;

    /**
     * default value
     * @var array
     */
    // protected $attributes = [];

     /**
     * The attributes that are mass assignable.
     * @var array<int, string>
     */
    protected $fillable = [
        'pref_name',
        'population',
        'sex',
    ];

    /**
     * 複数代入不可能な属性
     * @var array
     */
    protected $guarded = [
        'id'
    ];
}
