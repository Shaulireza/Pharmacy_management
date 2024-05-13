<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'name',
        'email',
        'phone'
    ];
    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function purchase(){
        return $this->hasMany(Purchase::class);
    }
    
}
