<?php

namespace App\Http\Requests\Admin\FoodAndProducts\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:50',
            'description' => 'nullable|string|min:3|max:255',
            'tax' => 'required|number|min:0|max:1'
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'This need to be filled',
            'name.string' => 'This need to be a string type',
            'name.min' => 'This need to be more than 3 characters',
            'name.max' => 'This need to be less than 50 characters',

            'description.min' => 'This need to be more than 3 characters',
            'description.max' => 'This need to be less than 250 characters',

            'tax.required' => 'This need to be filled',
            'tax.string' => 'This need to be a string type',
            'tax.min' => 'This need to be filled',
            'tax.max' => 'This need to be filled',
        ];
    }
}
