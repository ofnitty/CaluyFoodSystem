<?php

namespace App\Http\Requests\Admin\FoodAndProducts\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductStore extends FormRequest
{


    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [

            'name'=> 'required|string|unique:products|max:50',
            'description' => 'nullable|string|min:3|max:255',
            'image' => 'required|file|size:2048|dimensions:min_width=500,min_height=500|mimes:jpg,png',
            'plus18' => 'required|boolean',
            'purchasePrice' => 'required|float',
            'sellPrice' => 'required|float',
            'category_id' => 'required|integer|exists:App\Models\FoodAndProducts\Products\Category,id',
            'provider_id' => 'required|integer|exists:App\Models\FoodAndProducts\Provider,id',

        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'This need to be filled',
            'name.unique' => 'Alredy have a product with this name',
            'name.string' => 'This need to be a string type',
            'name.min' => 'This need to be more than 3 characters',
            'name.max' => 'This need to be less than 50 characters',

            'category_id.required' => 'This need to be filled',
            'category_id.exists' => 'Alredy have a category product with this id',
            'category_id.integer' => 'This need to be a integer type',

            'provider_id.required' => 'This need to be filled',
            'provider_id.exists' => 'Alredy have a provider product with this id',
            'provider_id.integer' => 'This need to be a integer type',

            'description.min' => 'This need to be more than 3 characters',
            'description.max' => 'This need to be less than 250 characters',
            'description.string' => 'This need to be a string type',

            'plus18.required' => 'This need to be filled',
            'plus18.boolean' => 'This is not a Boolean value',

            'purchasePrice.required' => 'This need to be filled',
            'purchasePrice.float' => 'This is not a Float value',

            'sellPrice.required' => 'This need to be filled',
            'sellPrice.float' => 'This is not a Float value',

            'image.file' => 'This is not a file',
            'image.size' => 'The maximum size of the image is 2mb',
            'image.dimensions' => 'The minimum dimension permitted is 500px / 500px',
            'image.mimes' => 'Only permitted JPG and PNG extension images',

        ];
    }
}
