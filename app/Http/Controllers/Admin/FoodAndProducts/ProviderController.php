<?php

namespace App\Http\Controllers\Admin\FoodAndProducts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Provider\ProviderStore;
use App\Http\Requests\Admin\Provider\ProviderUpdate;
use App\Models\Admin\FoodAndProducts\Provider;

class ProviderController extends Controller
{
    public function index()
    {
        $providers = Provider::get();
        return view('admin.foodandproducts.food.provider.index', compact('providers'));

    }


    public function create()
    {
        return view('admin.foodandproducts.food.provider.create');
    }


    public function store(ProviderStore $request)
    {
        Provider::create($request->all());
        return redirect()->route('providers.index');
    }


    public function show(Provider $provider)
    {
        return view('admin.foodandproducts.food.provider.show', compact('provider'));
    }


    public function edit(Provider $provider)
    {
        return view('admin.foodandproducts.food.provider.show', compact('provider'));
    }

    public function update(ProviderUpdate $request, Provider $provider)
    {
        $provider->update($request->all());
        return redirect()->route('providers.index');
    }


    public function destroy(Provider $provider)
    {
        $provider->delete();
        return redirect()->route('providers.index');
    }
}
