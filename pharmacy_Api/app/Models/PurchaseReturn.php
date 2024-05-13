<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseReturn extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'distriutor_id',
        'category_id',
        'product_id',
        'unit_id',
        'quantity',
        'preturn_price',
        'reason_id',
        'date',
    ];
}
