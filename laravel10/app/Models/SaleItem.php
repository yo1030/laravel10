<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleItem extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'item_no';
    public $incrementing = false;

    protected $fillable = [
        'item_no',
        'item'
    ];
}
