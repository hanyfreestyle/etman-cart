<?php

namespace App\Http\Requests\admin;
use Illuminate\Foundation\Http\FormRequest;


class BannerRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {

        $id = $this->route('id');

        $rules = [

        ];

        if($id == 0){
            $rules = [
                "category_id"    => "required",
                 "image"    => "required|mimes:jpg,jpeg,png,webp|max:1000",
            ];
        }
        foreach(config('app.lang_file') as $key=>$lang){
              $rules[$key.".name"] =   'required';
              $rules[$key.".url"] =   'nullable|url';
        }

        return $rules;
    }
}
