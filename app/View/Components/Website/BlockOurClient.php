<?php

namespace App\View\Components\Website;

use App\Models\admin\OurClient;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlockOurClient extends Component
{
    public $OurClients ;
    public function __construct()
    {
        $OurClients = OurClient::defWeb()->get();
        $this->OurClients = $OurClients ;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.block-our-client');
    }
}
