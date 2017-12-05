<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreUserRequest extends FormRequest
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
            'fname' => 'required|max:30',
            'lname' => 'required|max:30',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'max:30',
            'contact' => 'max:30',
            'nfc' => 'max:30',
            'secret' => 'max:30',
            'role_id' => 'required|min:1'
        ];
    }
}
