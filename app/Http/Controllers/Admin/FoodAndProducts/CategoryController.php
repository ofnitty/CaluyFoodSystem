<?php

namespace App\Http\Controllers\Admin\FoodAndProducts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FoodAndProducts\Category\StoreRequest;
use App\Http\Requests\Admin\FoodAndProducts\Category\UpdateRequest;
use App\Models\Admin\FoodAndProducts\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::get();
        return view('admin.foodandproducts.food.category.index', compact('categories'));

    }


    public function create()
    {
        return view('admin.foodandproducts.food.category.create');
    }


    public function store(StoreRequest $request)
    {
        Category::create($request->all());
        return redirect()->route('categories.index');
    }


    public function show(Category $category)
    {
        return view('admin.foodandproducts.food.category.show', compact('category'));
    }


    public function edit(Category $category)
    {
        return view('admin.foodandproducts.food.category.show', compact('category'));
    }

    public function update(UpdateRequest $request, Category $category)
    {
        $category->update($request->all());
        return redirect()->route('categories.index');
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
