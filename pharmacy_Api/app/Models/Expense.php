<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice_id',
        'expense_category_id',
        'expense_head',
        'date',
        'amount'
    ];
}
