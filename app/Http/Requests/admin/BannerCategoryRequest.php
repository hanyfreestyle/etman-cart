<?php
namespace App\Http\Requests\admin;
use Illuminate\Foundation\Http\FormRequest;

class BannerCategoryRequest extends FormRequest
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

        foreach(config('app.lang_file') as $key=>$lang){
            if($id == '0'){
                $rules[$key.".name"] = 'required|unique:banner_category_translations,name';
            }else{
                $rules[$key.".name"] = "required|unique:banner_category_translations,name,$id,category_id,locale,$key";
            }
        }

        return $rules;
    }
}
