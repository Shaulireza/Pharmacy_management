<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'company_id',
        'category_id',
        'unit_id',
        'company_price',
        'price',
        'quantity',
        'expire_date',
        'status',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function unit(){
        return $this->belongsTo(Unit::class);
    }
    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function purchase(){
        return $this->hasMany(Purchase::class);
    }
}
