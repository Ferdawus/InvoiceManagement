<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpeningStock extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'product_id',
        'date',
        'mfg_date',
        'expired_date',
        'purchase_price',
        'sales_price',
        'quantitiy',
        'purchase_price	',
    ];
}
