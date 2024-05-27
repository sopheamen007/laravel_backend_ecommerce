<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Restaurant extends Model
{
    use HasApiTokens, HasFactory;
    protected $fillable = [
        'name',
        'location'
    ];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    public function rating()
    {
        return $this->rating === null ? 0.0 : $this->rating;
    }


    public function isPen()
    {
        return $this->is_open == 1 ? true : false;
    }

    public function hasDelivery()
    {
        return $this->has_delivery == 1 ? true : false;
    }

}
