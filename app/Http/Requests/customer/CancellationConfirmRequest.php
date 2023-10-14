<?php

namespace App\Http\Requests\customer;

use Illuminate\Foundation\Http\FormRequest;

class CancellationConfirmRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'notes'=> "required|min:4|max:50",
        ];

    }

    public function messages()
    {
        return [

            'phone_option.min_digits' => "برجاء اضافة رقم الهاتف بصورة صحيحه ",
            'phone_option.max_digits' => "برجاء اضافة رقم الهاتف بصورة صحيحه ",
        ];
    }

}
