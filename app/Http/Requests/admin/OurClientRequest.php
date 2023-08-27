<?php

namespace App\Http\Requests\admin;
use App\Helpers\AdminHelper;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class OurClientRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

//    protected function prepareForValidation()
//    {
//        $data = $this->toArray();
//        foreach(config('app.lang_file') as $key=>$lang){
//            data_set($data, $key.'.slug',  AdminHelper::Url_Slug($data[$key]['slug']) );
//        }
//        $this->merge($data);
//
//    }

    public function rules(Request $request): array
    {

//        foreach(config('app.lang_file') as $key=>$lang){
//            $request->merge([$key.'.slug' => AdminHelper::Url_Slug($request[$key]['slug'])]);
//        }

        $id = $this->route('id');

        $rules = [

        ];

        foreach(config('app.lang_file') as $key=>$lang){
//            $rules[$key.".des"] =   'required';
//            $rules[$key.".g_title"] =   'required';
//            $rules[$key.".g_des"] =   'required';
            if($id == '0'){
                $rules[$key.".name"] = 'required|unique:our_client_translations,name';
            }else{
                $rules[$key.".name"] = "required|unique:our_client_translations,name,$id,client_id,locale,$key";
            }
        }

        return $rules;
    }
}
