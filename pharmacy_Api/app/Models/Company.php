<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function distributor(){
        return $this->hasMany(Distributor::class);
    }
    public function product(){
        return $this->hasMany(Product::class);
    }
    public function purchase(){
        return $this->hasMany(Purchase::class);
    }
    // public function purchase(){
    //     return $this->hasMany(Purchase::class);
    // }
}
