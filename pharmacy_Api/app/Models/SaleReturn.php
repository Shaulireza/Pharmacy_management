<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleReturn extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice_id',
        'company_id',
        'category_id',
        'product_id',
        'quantity',
        'sreturn_price',
        'reason_id',
        'date',
    ];
}
