<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'sale_date',
        'item_no',
        'quantity'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_no');
    }
}
