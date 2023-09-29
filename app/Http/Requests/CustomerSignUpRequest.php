<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerSignUpRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name'=> "required|min:4|max:50",
            'phone'=> "numeric|min_digits:11|max_digits:11",
            'email'=> "required|email|unique:users_customers",
            'password'=> "required|confirmed|min:8",
            'reg_terms'=> "accepted",
        ];

    }

    public function messages()
    {
        return [
            'email.unique' => "البريد الالكترونى مسجل من قبل ",
            'phone.min_digits' => "برجاء اضافة رقم الهاتف بصورة صحيحه ",
            'phone.max_digits' => "برجاء اضافة رقم الهاتف بصورة صحيحه ",
            'reg_terms' => "يجب الموافقة على سياسية الاستخدم ",
        ];
    }

}
