<?php

namespace App\Http\Requests\Admin\Provider;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

  /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:50|unique:providers',
            'description' => 'nullable|string|min:3|max:255',
            'phone' => 'required|string|min:5|max:10',
            'whatsapp' => 'nullable|string|min:5|max:10',
            'address' => 'required|string|min:3|max:50',
            'sellerName' => 'nullable|string|min:3|max:50',
            'email' => 'required|email|string|max:80'

        ];
    }

    public function messages()
    {
        return[


            'name.unique' => 'This provider alredy are registred',
            'name.required' => 'This need to be filled',
            'name.string' => 'This need to be a string type',
            'name.min' => 'This need to be more than 3 characters',
            'name.max' => 'This need to be less than 50 characters',

            'phone.required' => 'This need to be filled',
            'phone.string' => 'This need to be a string type',
            'phone.min' => 'This need to be more than 5 characters',
            'phone.max' => 'This need to be less than 10 characters',

            'whatsapp.required' => 'This need to be filled',
            'whatsapp.string' => 'This need to be a string type',
            'whatsapp.min' => 'This need to be more than 5 characters',
            'whatsapp.max' => 'This need to be less than 10 characters',

            'description.min' => 'This need to be more than 3 characters',
            'description.max' => 'This need to be less than 250 characters',

            'email.required' => 'This need to be filled',
            'email.email' => 'This need to be a email',
            'email.max' => 'This need to be less than 250 characters',

            'tax.required' => 'This need to be filled',
            'tax.string' => 'This need to be a string type',
            'tax.min' => 'This need to be filled',
            'tax.max' => 'This need to be filled',

            'sellerName.required' => 'This need to be filled',
            'sellerName.string' => 'This need to be a string type',
            'sellerName.min' => 'This need to be filled',
            'sellerName.max' => 'This need to be less than 50 characters',

            'address.required' => 'This need to be filled',
            'address.string' => 'This need to be a string type',
            'address.min' => 'This need to be filled with more than 3 characters',
            'address.max' => 'This need to be less than 100 characters',
        ];
    }
}
