<?php

namespace App\View\Components\web;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HtmlPreloader extends Component
{

    public $view ;
    public function __construct(
        $view = false,
    )
    {
        $this->view = $view ;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.web.html-preloader');
    }
}
