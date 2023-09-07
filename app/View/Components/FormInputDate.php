<?php

namespace App\View\Components;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormInputDate extends Component
{

    public $label;
    public $name;
    public $reqspan;
    public $inputId;
    public $col;
    public $value;
    public function __construct(
        $name = null,
        $label = null ,
        $reqspan = true ,
        $inputId = null ,
        $col = 'col-lg-3' ,
        $value = null ,


    )
    {
        if( $name == null){
            $this->name = "published_at" ;
        }else{
            $this->name = $name ;
        }


        if( $inputId == null){
            $this->inputId =  $this->name;
        }else{
            $this->inputId = $inputId ;
        }


       if( $label == null){
           $this->label = __('admin/def.published_at') ;
       }else{
           $this->label = $label ;
       }

        $this->reqspan = $reqspan ;
        $this->col = $col ;


        if( $value == null){
            $this->value = '' ;
        }else{
            $this->value = Carbon::parse($value)->format("m/d/Y");
        }


    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-input-date');
    }
}
