<?php

namespace App\Models\Admin\FoodAndProducts\Products;

use App\Models\Admin\FoodAndProducts\Provider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        'code',
        'name',
        'stock',
        'image',
        'plus18',
        'sellPrice',
        'purchasePrice',
        'status',
        'category_id',
        'provider_id',

    ];

    public function category(){

        return $this->belongsTo(Category::class);

    }

    public function provider(){

        return $this->belongsTo(Provider::class);

    }

}


