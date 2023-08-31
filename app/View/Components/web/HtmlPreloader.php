<?php

namespace App\View\Components\web;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HtmlPreloader extends Component
{

    public $viewState ;
    public function __construct(
        $viewState = false
    )
    {
        $this->viewState = $viewState ;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.web.html-preloader');
    }
}
