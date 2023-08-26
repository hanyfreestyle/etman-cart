<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DefSettings extends Component
{
    public $modelname;
    public $datatable;
    public $orderby;
    public $filterid;
    public $morePhotoFilterid;
    public $orderbyDef;
    public $orderbyPostion;
    public $orderbyDate;
    public $editor;

    public function __construct(
        $modelname = "",
        $datatable = true,
        $orderby = true,
        $orderbyDef = "1",
        $orderbyPostion = false,
        $orderbyDate = false,
        $filterid = true,
        $morePhotoFilterid = false,
        $editor = false,

    )
    {
        $this->modelname = $modelname;
        $this->datatable = $datatable;
        $this->orderby = $orderby;
        $this->orderbyDef = $orderbyDef;
        $this->orderbyPostion = $orderbyPostion;
        $this->filterid = $filterid;
        $this->morePhotoFilterid = $morePhotoFilterid;
        $this->orderbyDate = $orderbyDate;
        $this->editor = $editor;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.def-settings');
    }
}
