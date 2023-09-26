<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = [
        'business_name',
        'customer_name',
        'contact_number',
        'alternative_contact_number',
        'email',
        'credit_limit',
        'address',
        'opening_balance',
        'nid_no',
        'status',
        'photo',
        'note'
    ];
}
