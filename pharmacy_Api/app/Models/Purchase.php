<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'distriutor_id',
        'category_id',
        'product_id',
        'unit_id',
        'quantity',
        'purchase_price',
        'price',
        'expire_date',
        'payment_methods_id',
    ];
    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function distributor(){
        return $this->belongsTo(distributor::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

}
