<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class BannerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(Request $request): array
    {

        $id = $this->route('id');

        if($id == 0){
            $rules = [
                "image"    => "required|array|min:1|max:5",
                'image.*'  => 'required|mimes:jpg,jpeg,png,bmp|max:2000',
            ];
        }
        foreach(config('app.lang_file') as $key=>$lang){
              $rules[$key.".name"] =   'required';
              $rules[$key.".url"] =   'nullable|url';
        }

        return $rules;
    }
}
