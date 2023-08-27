<?php
namespace App\Http\Requests\admin;
use Illuminate\Foundation\Http\FormRequest;

class AttributeTableRequest extends FormRequest
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

        if($id == '0'){
            foreach(config('app.lang_file') as $key=>$lang){
                $rules[$key.".name"] =   'required|unique:attribute_table_translations,name';
            }
        }else{
            foreach(config('app.lang_file') as $key=>$lang){
                $rules[$key.".name"] =   "required|unique:attribute_table_translations,name,$id,attribute_id,locale,$key";
            }
        }

        return $rules;
    }
}
