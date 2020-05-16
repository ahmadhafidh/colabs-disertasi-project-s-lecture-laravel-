<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        if (request()->isMethod('POST')) {
            return [
                'name' => ['required'],
                'email' => ['required', 'email', 'unique:users,email'],
                'password' => ['required'],
                'confirm_password' => ['required', 'same:password']
            ];
        } else {
            return [
                'name' => ['required'],
                'email' => ['required', 'email', "unique:users,email," . $this->user->id],
                'password' => ['sometimes'],
                'confirm_password' => ['sometimes', 'same:password']
            ];
        }
    }
}
