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
    public $orderbyDef;
    public $orderbyPostion;

    public function __construct(
        $modelname = "",
        $datatable = true,
        $orderby = true,
        $orderbyDef = "1",
        $orderbyPostion = false,
        $filterid = true,

    )
    {
        $this->modelname = $modelname;
        $this->datatable = $datatable;
        $this->orderby = $orderby;
        $this->orderbyDef = $orderbyDef;
        $this->orderbyPostion = $orderbyPostion;
        $this->filterid = $filterid;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.def-settings');
    }
}
