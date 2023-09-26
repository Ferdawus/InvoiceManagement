<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand_id',
        'customer_id',
        'supplier_id',
        'category_id',
        'product_name',
        'product_code',
        'purchase_price',
        'sales_price',
        'mrp',
        'quantitiy',
        'alert_quantity',
        'tax',
        'discount',
        'date',
        'barcode',
        'qrcode',
        'status',
        'note',
        'meta_data'
    ];
}
