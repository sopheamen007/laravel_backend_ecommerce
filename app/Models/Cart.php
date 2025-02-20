<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'menu_id',
        'user_id',
        'quantity',
        'total_price',
        'created_at',
        'updated_at'
    ];
}
