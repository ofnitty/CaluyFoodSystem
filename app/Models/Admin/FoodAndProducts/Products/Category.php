<?php

namespace App\Models\Admin\FoodAndProducts\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'tax',
        'description',

    ];

    public function products(){

        return $this->hasMany(Product::class);
    }
}
