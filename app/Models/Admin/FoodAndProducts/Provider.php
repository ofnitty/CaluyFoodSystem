<?php

namespace App\Models\Admin\FoodAndProducts;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'email',
        'phone',
        'whatsapp',
        'address',
        'sellerName'

    ];



}
