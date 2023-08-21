<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryTableRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        foreach(config('app.lang_file') as $key=>$lang){
            $rules[$key.".name"] =   'required';
            $rules[$key.".des"] =   'required';
        }

        return $rules;
    }
}
