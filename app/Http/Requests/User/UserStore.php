<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserStore extends FormRequest
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

    public function rules()
    {
        return [


            'firstName' => 'required|string|min:3|max:20',
            'middleName' => 'nullable|string|min:3|max:20',
            'lastName' => 'nullable|string|min:3|max:20',
            'birthdate' => 'nullable|date',
            'doc' => 'nullable|string|unique:users|min:5|max:12',
            'whatsapp' => 'nullable|string|max:50',
            'email' => 'required|email:rfc,dns|unique:users|max:50',
            'password' => [
                'required',
                'string',
                'min:4',
                'max:12',             // must be at least 10 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                //'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                //'regex:/[@$!%*#?&]/', // must contain a special character
            ],
            'password_confirm' => 'required|same:password' ,
            'deliveryName' => 'nullable|string|min:3|max:20',
            'phone' => 'required|string|min:6|max:12',
            'address' => 'required|string|max:50',
            'addressNumber' => 'required|integer|max:5',
            'addressBlock' => 'nullable|string|max:15',
            'addressDoor' => 'nullable|string|max:6',
            'addressAditional' => 'nullable|string|max:50',
            'country' => 'nullable|string|max:50',
            'state' => 'nullable|string|max:50',
            'city' => 'nullable|string|max:50',
            'verified' => 'required|boolean',
            'newsletter' => 'required|boolean',
            'twoFactor' => 'required|boolean',
            'active' => 'required|boolean',
            'role' => 'required|integer',
            'mpw' => 'required|string|max:12',

        ];
    }

    public function messages()
    {
        return[
            'firstName.required' => 'This need to be filled',
            'firstName.string' => 'This need to be a string type',
            'firstName.min' => 'This need to be more than 3 characters',
            'firstName.max' => 'This need to be less than 20 characters',

            'middleName.string' => 'This need to be a string type',
            'middleName.min' => 'This need to be more than 3 characters',
            'middleName.max' => 'This need to be less than 20 characters',

            'lastName.string' => 'This need to be a string type',
            'lastName.min' => 'This need to be more than 3 characters',
            'lastName.max' => 'This need to be less than 20 characters',

            'birthdate.date' => 'This need to be a date',

            'doc.required' => 'This need to be filled',
            'doc.string' => 'This need to be a string type',
            'doc.unique' => 'This need to be unique',
            'doc.min' => 'This need to be more than 5 characters',
            'doc.max' => 'This need to be less than 12 characters',

            'whatsapp.string' => 'This need to be a string type',
            'whatsapp.max' => 'This need to be less than 50 characters',

            'email.required' => 'This need to be filled',
            'email.email' => 'This not a valid email',
            'email.unique' => 'This need to be unique',
            'email.max' => 'This need to be less than 50 characters',

            'password.required' => 'This need to be filled',
            'password.string' => 'This need to be a string type',
            'password.unique' => 'This need to be unique',
            'password.min' => 'This need to be less than 4 characters',
            'password.max' => 'This need to be less than 12 characters',
            'password.regex' => 'You need to put less one letter and one number',

            'password_confirm.same' => 'You need to put less one letter and one number',

            'deliveryName.string' => 'This need to be a string type',
            'deliveryName.min' => 'This need to be more than 3 characters',
            'deliveryName.max' => 'This need to be less than 20 characters',

            'phone.string' => 'This need to be a string type',
            'phone.min' => 'This need to be more than 6 characters',
            'phone.max' => 'This need to be less than 12 characters',

            'address.string' => 'This need to be a string type',
            'address.max' => 'This need to be less than 50 characters',

            'addressNumber.integer' => 'This need to be a integer type',
            'addressNumber.max' => 'This need to be less than 5 characters',

            'addressBlock.integer' => 'This need to be a string type',
            'addressBlock.max' => 'This need to be less than 15 characters',

            'addressDoor.integer' => 'This need to be a string type',
            'addressDoor.max' => 'This need to be less than 6 characters',

            'addressAditional.string' => 'This need to be a string type',
            'addressAditional.max' => 'This need to be less than 50 characters',

            'country.string' => 'This need to be a string type',
            'country.max' => 'This need to be less than 50 characters',

            'state.string' => 'This need to be a string type',
            'state.max' => 'This need to be less than 50 characters',

            'city.string' => 'This need to be a string type',
            'city.max' => 'This need to be less than 50 characters',

            'verified.required' => 'This is required',
            'verified.boolean' => 'This need to be true or false',

            'newsletter.required' => 'This is required',
            'newsletter.boolean' => 'This need to be true or false',

            'twoFactor.required' => 'This is required',
            'twoFactor.boolean' => 'This need to be true or false',

            'active.required' => 'This is required',
            'active.boolean' => 'This need to be true or false',

            'active.required' => 'This is required',
            'active.integer' => 'This need to be a number integer',

        ];
    }
}
