<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Controllers\WebMainController;
use Illuminate\Http\Request;

class WebPageController extends WebMainController
{
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     index
    public function index()
    {
//        $Meta = parent::getMeatByCatId('home');
//        parent::printSeoMeta($Meta);
        return view('web.index');
    }
}
