<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class FaqRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(Request $request): array
    {

       // dd($request->all());

        $id = $this->route('id');

        $rules = [
            'categories'  => 'required|array|min:1',
        ];


        foreach(config('app.lang_file') as $key=>$lang){
            $rules[$key.".name"] =   'required';
            $rules[$key.".des"] =   'required';
            $rules[$key.".url"] =   'nullable|url';
        }

        return $rules;
    }
}
