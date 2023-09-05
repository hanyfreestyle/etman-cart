<?php

namespace App\View\Components\Website;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FaqSlider extends Component
{
    public $prefix ;
    public $title ;

    public function __construct(
        $prefix = 'prefix',
        $title = ''
    )
    {
       $this->prefix = $prefix ;
       $this->title = $title ;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.faq-slider');
    }
}
