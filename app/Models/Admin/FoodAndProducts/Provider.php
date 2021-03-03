<?php

namespace App\Models\Admin\FoodAndProducts;

use App\Models\Admin\FoodAndProducts\Products\Product;
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

    public function products(){

        return $this->hasMany(Product::class);

    }

}
