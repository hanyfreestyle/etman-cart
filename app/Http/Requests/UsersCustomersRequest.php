<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersCustomersRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email'=> "required|email|exists:users_customers",
            'password'=> "required|min:8",
        ];
    }

    public function messages()
    {
        return [
            'email.exists' => __('web/customers.login_err_exists') ,
        ];
    }

}
