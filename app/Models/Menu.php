<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Menu extends Model
{
    use HasApiTokens, HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price'
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function isAvailable()
    {
        return $this->is_available == 1 ? true : false;
    }
}
