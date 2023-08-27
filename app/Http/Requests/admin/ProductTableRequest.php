<?php

namespace App\Http\Requests\admin;
use Illuminate\Foundation\Http\FormRequest;

class ProductTableRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

   public function rules(): array
    {
        $rules =[
            'attribute_id'=> "required",
        ];

        foreach(config('app.lang_file') as $key=>$lang){
            $rules[$key.".des"] =   'required';
        }

        return $rules;
    }
}
