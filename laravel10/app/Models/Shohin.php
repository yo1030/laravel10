<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shohin extends Model
{
    use HasFactory;
    protected $fillable = [
        'shohin_id',
        'shohin_mei',
        'shohin_bunrui',
        'hanbai_tanka'
    ];
}
