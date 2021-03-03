<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FoodAndProducts\Product\ProductStore;
use App\Http\Requests\Admin\FoodAndProducts\Product\ProductUpdate;
use App\Models\Admin\FoodAndProducts\Products\Category;
use App\Models\Admin\FoodAndProducts\Products\Product;
use App\Models\Admin\FoodAndProducts\Provider;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('admin.foodandproducts.food.product.index', compact('products'));

    }


    public function create()
    {

        $categories = Category::get();
        $providers = Provider::get();

        return view('admin.foodandproducts.food.product.create', compact('categories', 'providers'));
    }


    public function store(ProductStore $request)
    {
        Product::create($request->all());
        return redirect()->route('products.index');
    }


    public function show(Product $product)
    {
        return view('admin.foodandproducts.food.product.show', compact('product'));
    }


    public function edit(Product $product)
    {
        $categories = Category::get();
        $providers = Provider::get();
        return view('admin.foodandproducts.food.product.show', compact('categories', 'providers', 'product'));
    }

    public function update(ProductUpdate $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('products.index');
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
